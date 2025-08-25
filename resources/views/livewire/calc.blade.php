<?php

use function Livewire\Volt\{state, mount};

state(['num1', 'num2', 'operator', 'word', 'num3']);

mount(function () {
    if ($this->operator == 'addition') {
        $this->word = '+';
        $this->num3 = $this->num1 + $this->num2;
    } elseif ($this->operator == 'subtraction') {
        $this->word = '-';
        $this->num3 = $this->num1 - $this->num2;
    } elseif ($this->operator == 'multiplication') {
        $this->word = 'x';
        $this->num3 = $this->num1 * $this->num2;
    } elseif ($this->operator == 'division') {
        $this->word = '÷';
        $this->num3 = $this->num1 / $this->num2;
    } else {
        $this->word = '?';
        $this->num3 = '無効な演算子です';
    }
});

?>

<div>
    <h1>計算結果</h1>
    <p>{{ $num1 }}{{ $word }}{{ $num2 }}={{ $num3 }}</p>
</div>
