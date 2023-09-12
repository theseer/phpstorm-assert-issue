<?php declare(strict_types=1);

class Demo {

    public function __construct(
        private Handler $handler
    ) {}

    public function foo(Event $event) {
        assert($event instanceof MyEvent);
        /** @var MyEvent $event */

        $this->handler->handle(
            $event->asString()
        );
    }
}
