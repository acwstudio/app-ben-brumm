<?php

namespace App\Console\Commands;

use App\AMQP\AMPQClient;
use Illuminate\Console\Command;
use PhpAmqpLib\Message\AMQPMessage;

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

    /**
     * Execute the console command.
     */
    public function handle(AMPQClient $client)
    {
        $data = $client->consume('my_queue', function (iterable $message) {
            return $message->getBody();
        });
//        dd($data);
    }
}
