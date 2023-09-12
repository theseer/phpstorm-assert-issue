<?php declare(strict_types=1);

class Handler {

    public function handle(MyEvent $event): void {
        echo "called.";
    }
}
