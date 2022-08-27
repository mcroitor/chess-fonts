<?php

use ChessFont as GlobalChessFont;

class ChessFont {
    public const WHITE_KING_ON_BLACK_SQUARE = "white-king-on-black-square";
    public const WHITE_KING_ON_WHITE_SQUARE = "white-king-on-white-square";
    public const BLACK_KING_ON_BLACK_SQUARE = "black-king-on-black-square";
    public const BLACK_KING_ON_WHITE_SQUARE = "black-king-on-white-square";
    public const WHITE_QUEEN_ON_BLACK_SQUARE = "white-queen-on-black-square";
    public const WHITE_QUEEN_ON_WHITE_SQUARE = "white-queen-on-white-square";
    public const BLACK_QUEEN_ON_BLACK_SQUARE = "black-queen-on-black-square";
    public const BLACK_QUEEN_ON_WHITE_SQUARE = "black-queen-on-white-square";
    public const WHITE_ROOK_ON_BLACK_SQUARE = "white-rook-on-black-square";
    public const WHITE_ROOK_ON_WHITE_SQUARE = "white-rook-on-white-square";
    public const BLACK_ROOK_ON_BLACK_SQUARE = "black-rook-on-black-square";
    public const BLACK_ROOK_ON_WHITE_SQUARE = "black-rook-on-white-square";
    public const WHITE_BISHOP_ON_BLACK_SQUARE = "white-bishop-on-black-square";
    public const WHITE_BISHOP_ON_WHITE_SQUARE = "white-bishop-on-white-square";
    public const BLACK_BISHOP_ON_BLACK_SQUARE = "black-bishop-on-black-square";
    public const BLACK_BISHOP_ON_WHITE_SQUARE = "black-bishop-on-white-square";
    public const WHITE_KNIGHT_ON_BLACK_SQUARE = "white-knight-on-black-square";
    public const WHITE_KNIGHT_ON_WHITE_SQUARE = "white-knight-on-white-square";
    public const BLACK_KNIGHT_ON_BLACK_SQUARE = "black-knight-on-black-square";
    public const BLACK_KNIGHT_ON_WHITE_SQUARE = "black-knight-on-white-square";
    public const WHITE_PAWN_ON_BLACK_SQUARE = "white-pawn-on-black-square";
    public const WHITE_PAWN_ON_WHITE_SQUARE = "white-pawn-on-white-square";
    public const BLACK_PAWN_ON_BLACK_SQUARE = "black-pawn-on-black-square";
    public const BLACK_PAWN_ON_WHITE_SQUARE = "black-pawn-on-white-square";
    public const WHITE_SQUARE = "white-square";
    public const BLACK_SQUARE = "black-square";
    public const WHITE_KING = "white-king";
    public const BLACK_KING = "black-king";
    public const WHITE_QUEEN = "white-queen";
    public const BLACK_QUEEN = "black-queen";
    public const WHITE_ROOK = "white-rook";
    public const BLACK_ROOK = "black-rook";
    public const WHITE_BISHOP = "white-bishop";
    public const BLACK_BISHOP = "black-bishop";
    public const WHITE_KNIGHT = "white-knight";
    public const BLACK_KNIGHT = "black-knight";
    public const WHITE_PAWN = "white-pawn";
    public const BLACK_PAWN = "black-pawn";
    public const LEFT_TOP_CORNER_BOARD = "left-top-corner-board";
    public const RIGHT_TOP_CORNER_BOARD = "right-top-corner-board";
    public const LEFT_BOTTOM_CORNER_BOARD = "left-bottom-corner-board";
    public const RIGHT_BOTTOM_CORNER_BOARD = "right-bottom-corner-board";
    public const TOP_SIDE_BOARD = "top-side-board";
    public const BOTTOM_SIDE_BOARD = "bottom-side-board";
    public const LEFT_SIDE_BOARD = "left-side-board";
    public const RIGHT_SIDE_BOARD = "right-side-board";

    public $meta = [];
    public $definition = [];

    public function __construct($font)
    {
        $this->meta = (array)$font->meta;
        $this->definition = (array)$font->definition;
    }

    public static function LoadDefinition(string $font_desc_file) {
        $data = json_decode(file_get_contents($font_desc_file));
        return $data;
    }

    public static function Load(string $font_desc_file) {
        $definition = self::LoadDefinition($font_desc_file);
        return new ChessFont($definition);
    }

    public function name(){
        return $this->meta["font-name"];
    }

    public function id() {
        return $this->meta["id"];
    }

    public function get(string $key) {
        return $this->definition[$key];
    }

    public function diagram(array $ascii) {
        // prepare top of board
        // prepare each line (add left and right sides)
        // prepare bottom of board
    }
}

$font_def = "../definitions/json/merida.json";

$font = ChessFont::Load($font_def);

echo "font id: {$font->id()}" . PHP_EOL;
echo "font name: {$font->name()}" . PHP_EOL;
echo "font char for ". ChessFont::WHITE_KING_ON_BLACK_SQUARE .": {$font->get(ChessFont::WHITE_KING_ON_BLACK_SQUARE)}" . PHP_EOL;
echo "font char for ". ChessFont::BLACK_BISHOP .": {$font->get(ChessFont::BLACK_BISHOP)}" . PHP_EOL;
