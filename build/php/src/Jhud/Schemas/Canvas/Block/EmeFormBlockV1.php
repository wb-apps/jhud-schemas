<?php
// @link https://schemas.jenniferhudsonshow.com/json-schema/jhud/canvas/block/eme-form-block/1-0-0.json#
namespace Jhud\Schemas\Canvas\Block;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Triniti\Schemas\Canvas\Mixin\Block\BlockV1 as TrinitiCanvasBlockV1;
use Triniti\Schemas\Canvas\Mixin\Block\BlockV1Mixin as TrinitiCanvasBlockV1Mixin;
use Triniti\Schemas\Canvas\Mixin\Block\BlockV1Trait as TrinitiCanvasBlockV1Trait;
use Triniti\Schemas\Canvas\Mixin\EmeFormBlock\EmeFormBlockV1 as TrinitiCanvasEmeFormBlockV1;
use Triniti\Schemas\Canvas\Mixin\EmeFormBlock\EmeFormBlockV1Mixin as TrinitiCanvasEmeFormBlockV1Mixin;
use Triniti\Schemas\Canvas\Mixin\EmeFormBlock\EmeFormBlockV1Trait as TrinitiCanvasEmeFormBlockV1Trait;

final class EmeFormBlockV1 extends AbstractMessage implements
    EmeFormBlock,
    TrinitiCanvasBlockV1,
    TrinitiCanvasEmeFormBlockV1
{
    use TrinitiCanvasBlockV1Trait;
    use TrinitiCanvasEmeFormBlockV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:jhud:canvas:block:eme-form-block:1-0-0', __CLASS__,
            [],
            [
                TrinitiCanvasBlockV1Mixin::create(),
                TrinitiCanvasEmeFormBlockV1Mixin::create(),
            ]
        );
    }
}
