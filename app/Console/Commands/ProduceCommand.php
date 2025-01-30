<?php

namespace App\Console\Commands;

use App\AMQP\AMPQClient;
use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryCollection;
use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryResource;
use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Illuminate\Console\Command;

class ProduceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rabbitmq:produce';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'RabbitMQ Producer';

    /**
     * Execute the console command.
     */
    public function handle(AMPQClient $client): int
    {
//        $data = [
//            'message' => 'Hello World from artisan command',
//            'from' => 'artisan'
//        ];
        $item = Jewellery::query()->where('id', 1)->with('inserts','braceletPropView','stones')->first();
//        dd($item);
        $data = (new JewelleryResource($item))
            ->response();

        $client->publish('my_queue_1', $data->content());

        return Command::SUCCESS;
    }
}
