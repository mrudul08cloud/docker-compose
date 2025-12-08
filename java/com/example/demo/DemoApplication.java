package com.example.demo;

import org.springframework.amqp.core.Queue;
import org.springframework.amqp.rabbit.annotation.RabbitListener;
import org.springframework.amqp.rabbit.core.RabbitTemplate;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.Bean;

@SpringBootApplication
public class DemoApplication {

    public static final String QUEUE_NAME = "demoQueue";

    public static void main(String[] args) {
        SpringApplication.run(DemoApplication.class, args);
    }

    @Bean
    public Queue demoQueue() {
        return new Queue(QUEUE_NAME, false);
    }

    @Bean
    public CommandLineRunner runner(RabbitTemplate rabbitTemplate) {
        return args -> {
            // Send a demo message
            rabbitTemplate.convertAndSend(QUEUE_NAME, "Hello RabbitMQ from Java!");
            System.out.println("Message sent to queue: " + QUEUE_NAME);
        };
    }

    // Listener for incoming messages
    @RabbitListener(queues = QUEUE_NAME)
    public void listen(String message) {
        System.out.println("Received message: " + message);
    }
}
