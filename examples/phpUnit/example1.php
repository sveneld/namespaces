<?php

declare(strict_types=1);

namespace PHPUnitExampleReplaced {
    class A
    {
        public function getName() {
            return 'A';
        }
    }

    class_alias(
        \PHPUnitExampleReplaced\A::class,
        \PHPUnitExample\A::class
    );
}

namespace PHPUnitExample {

    class B
    {
        protected A $a;

        public function __construct(A $a)
        {
            $this->a = $a;
        }

        public function getA(): A
        {
            return $this->a;
        }
    }

    class C {
        protected B $b;

        public function __construct(B $b)
        {
            $this->b = $b;
        }

        public function getB(): B
        {
            return $this->b;
        }
    }
}

