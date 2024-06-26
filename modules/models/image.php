<?php
namespace Models;
class Image implements \Iterator {
    private $current_index = 0;
    private const DATA = [
        ['src' => '200804282020.jpg', 'desc' => 'Цветы кактуса'],
        ['src' => '200807192032.jpg', 'desc' => 'Пустынная аллея в запущенном парке'],
        ['src' => '200901092053.jpg', 'desc' => 'Зимний закат'],
        ['src' => '201410131614.jpg', 'desc' => 'Роза'],
        ['src' => '201506152037.jpg', 'desc' => 'Памятник сусликам'],
        ['src' => '201709180821.jpg', 'desc' => 'Бронзовые бегемотики'],
        ['src' => '201709252026.jpg', 'desc' => 'Кот ученый'],
        ['src' => '201710242002.jpg', 'desc' => 'Памятник собаке-поводырю'],
        ['src' => '201802131844.jpg', 'desc' => 'Блинная скульптура в кафе']
    ];

    static function get_image(int $index): array {
        return self::DATA[$index];
    }

    public function current(): mixed
    {
        return self::DATA[$this->current_index];
    }

    public function next(): void
    {
        $this->current_index++;
    }

    public function key(): mixed
    {
        return $this->current_index;
    }

    #[\Override] public function valid(): bool
    {
        return isset(self::DATA[$this->current_index]);
    }

    #[\Override] public function rewind(): void
    {
        $this->current_index = 0;
    }
}
