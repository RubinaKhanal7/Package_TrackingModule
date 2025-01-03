<?php

dataset('numbers.closure', function () {
    yield [1];
    yield [2];
});

dataset('numbers.closure.wrapped', function () {
    yield 1;
    yield 2;
});

dataset('numbers.array', [[1], [2]]);

dataset('numbers.array.wrapped', [1, 2]);

dataset('numbers.generators.wrapped', function () {
    yield from firstSetOfNumber();
    yield from secondSetOfNumbers();
});

function firstSetOfNumber(): Generator
{
    yield 1;
    yield 2;
}

function secondSetOfNumbers(): Generator
{
    yield 3;
    yield 4;
}
