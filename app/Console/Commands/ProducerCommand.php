<?php

namespace App\Console\Commands;

use App\AMQP\AMPQClient;
use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryCollection;
use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryResource;
use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Illuminate\Console\Command;

class ProducerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rabbitmq:producer';

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
        $data = (new JewelleryResource(Jewellery::find(1)))
            ->response();

        $client->publish('my_queue', $data);

        return Command::SUCCESS;
    }
}
