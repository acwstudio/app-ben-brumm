<?php

namespace App\Console\Commands;

use App\AMQP\AMPQClient;
use App\AMQP\Jewelleries\Jewellery\Validators\JewelleryMessageStoreValidator;
use Illuminate\Console\Command;
use function Laravel\Prompts\select;

class ConsumeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rabbitmq:consume';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'RabbitMQ Consumer';

    public function __construct(public JewelleryMessageStoreValidator $validator)
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     * @throws \Exception
     */
    public function handle(AMPQClient $client): int
    {
        $queue = select(
            label: 'What a queue do you want to use?',
            options: [
                'jewellery.store' => 'Jewellery store',
                'jewellery.update' => 'Jewellery update',
                'jewellery.*' => 'Jewellery update or store',
            ],
        );
        $callback = function ($message) {
            $this->validator->validate($message);
            dump($message);
        };

        $client->consume($queue, $callback);

        return Command::SUCCESS;
    }
}
