<?php
$dir = dirname(__DIR__) . '/public/image/catalog/mr';

if (!is_dir($dir) && !mkdir($dir, 0775, true) && !is_dir($dir)) {
    fwrite(STDERR, "Cannot create {$dir}\n");
    exit(1);
}

function color($im, int $r, int $g, int $b, int $a = 0) {
    return imagecolorallocatealpha($im, $r, $g, $b, $a);
}

function canvas(): GdImage {
    $im = imagecreatetruecolor(800, 800);
    imagealphablending($im, true);
    imageantialias($im, true);
    imagefilledrectangle($im, 0, 0, 800, 800, color($im, 255, 255, 255));
    imagefilledellipse($im, 400, 690, 420, 48, color($im, 220, 226, 232, 40));
    return $im;
}

function roundRect($im, int $x, int $y, int $w, int $h, int $r, int $col): void {
    imagefilledrectangle($im, $x + $r, $y, $x + $w - $r, $y + $h, $col);
    imagefilledrectangle($im, $x, $y + $r, $x + $w, $y + $h - $r, $col);
    imagefilledellipse($im, $x + $r, $y + $r, $r * 2, $r * 2, $col);
    imagefilledellipse($im, $x + $w - $r, $y + $r, $r * 2, $r * 2, $col);
    imagefilledellipse($im, $x + $r, $y + $h - $r, $r * 2, $r * 2, $col);
    imagefilledellipse($im, $x + $w - $r, $y + $h - $r, $r * 2, $r * 2, $col);
}

function verticalGradient($im, int $x, int $y, int $w, int $h, array $from, array $to): void {
    for ($i = 0; $i < $h; $i++) {
        $t = $h <= 1 ? 0 : $i / ($h - 1);
        $col = color(
            $im,
            (int)($from[0] + ($to[0] - $from[0]) * $t),
            (int)($from[1] + ($to[1] - $from[1]) * $t),
            (int)($from[2] + ($to[2] - $from[2]) * $t)
        );
        imageline($im, $x, $y + $i, $x + $w, $y + $i, $col);
    }
}

function laptop(array $screen): void {
    $im = canvas();
    $bezel = color($im, 46, 52, 62);
    $base = color($im, 196, 204, 214);
    $baseDark = color($im, 150, 160, 172);
    $key = color($im, 92, 100, 112);
    roundRect($im, 170, 145, 460, 300, 16, $bezel);
    verticalGradient($im, 190, 164, 420, 258, $screen[0], $screen[1]);
    imagefilledpolygon($im, [130, 432, 670, 432, 730, 500, 70, 500], $base);
    imagefilledrectangle($im, 70, 500, 730, 516, $baseDark);
    for ($row = 0; $row < 3; $row++) {
        for ($col = 0; $col < 12; $col++) {
            imagefilledrectangle($im, 175 + $col * 38, 448 + $row * 12, 203 + $col * 38, 456 + $row * 12, $key);
        }
    }
    save($im, $screen[2]);
}

function television(array $screen): void {
    $im = canvas();
    $bezel = color($im, 22, 24, 28);
    $stand = color($im, 70, 76, 86);
    roundRect($im, 90, 140, 620, 380, 14, $bezel);
    verticalGradient($im, 114, 162, 572, 336, $screen[0], $screen[1]);
    imagefilledrectangle($im, 360, 530, 440, 590, $stand);
    imagefilledellipse($im, 400, 610, 180, 22, $stand);
    save($im, $screen[2]);
}

function phone(array $screen): void {
    $im = canvas();
    $body = color($im, 28, 30, 34);
    $frame = color($im, 210, 214, 220);
    roundRect($im, 250, 90, 300, 600, 46, $frame);
    roundRect($im, 264, 106, 272, 568, 36, $body);
    verticalGradient($im, 278, 140, 244, 500, $screen[0], $screen[1]);
    imagefilledellipse($im, 400, 128, 70, 16, color($im, 16, 16, 18));
    imagefilledellipse($im, 400, 640, 28, 28, color($im, 80, 84, 92));
    save($im, $screen[2]);
}

function coffee(array $tone): void {
    $im = canvas();
    $body = color($im, $tone[0][0], $tone[0][1], $tone[0][2]);
    $dark = color($im, $tone[1][0], $tone[1][1], $tone[1][2]);
    $cup = color($im, 244, 241, 234);
    roundRect($im, 230, 180, 300, 360, 28, $body);
    roundRect($im, 250, 210, 90, 180, 16, color($im, 186, 214, 230));
    imagefilledrectangle($im, 360, 250, 490, 430, $dark);
    imagefilledellipse($im, 425, 250, 130, 36, color($im, 230, 234, 238));
    roundRect($im, 470, 470, 110, 70, 12, $cup);
    imagefilledellipse($im, 525, 470, 90, 24, color($im, 30, 30, 30));
    imagefilledrectangle($im, 250, 540, 500, 560, color($im, 90, 96, 104));
    save($im, $tone[2]);
}

function save($im, string $name): void {
    global $dir;
    imagepng($im, $dir . '/' . $name);
    imagedestroy($im);
    echo $name . "\n";
}

laptop([[232, 236, 244], [90, 120, 160], 'laptop-apple.png']);
laptop([[20, 20, 24], [70, 78, 96], 'laptop-samsung.png']);
laptop([[18, 42, 84], [120, 170, 220], 'laptop-asus.png']);
laptop([[250, 120, 40], [90, 30, 20], 'laptop-xiaomi.png']);
television([[20, 80, 180], [8, 16, 40], 'tv-samsung.png']);
television([[40, 10, 60], [180, 40, 80], 'tv-sony.png']);
television([[10, 30, 20], [40, 140, 90], 'tv-lg.png']);
television([[180, 40, 20], [40, 10, 80], 'tv-philips.png']);
phone([[20, 20, 22], [90, 96, 110], 'phone-apple.png']);
phone([[10, 30, 80], [80, 140, 220], 'phone-samsung.png']);
phone([[40, 40, 42], [180, 190, 196], 'phone-xiaomi.png']);
phone([[20, 16, 28], [120, 70, 160], 'phone-sony.png']);
coffee([[236, 238, 242], [180, 186, 194], 'coffee-magnifica.png']);
coffee([[232, 234, 236], [150, 158, 168], 'coffee-latte.png']);
coffee([[48, 52, 58], [20, 22, 26], 'coffee-dinamica.png']);
coffee([[246, 246, 248], [190, 194, 200], 'coffee-3200.png']);
