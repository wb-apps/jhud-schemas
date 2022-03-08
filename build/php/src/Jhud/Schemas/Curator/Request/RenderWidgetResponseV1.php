<?php
// @link https://schemas.jenniferhudsonshow.com/json-schema/jhud/curator/request/render-widget-response/1-0-0.json#
namespace Jhud\Schemas\Curator\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Curator\Mixin\RenderWidgetResponse\RenderWidgetResponseV1 as TrinitiCuratorRenderWidgetResponseV1;
use Triniti\Schemas\Curator\Mixin\RenderWidgetResponse\RenderWidgetResponseV1Mixin as TrinitiCuratorRenderWidgetResponseV1Mixin;

final class RenderWidgetResponseV1 extends AbstractMessage implements
    RenderWidgetResponse,
    GdbotsPbjxResponseV1,
    TrinitiCuratorRenderWidgetResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:jhud:curator:request:render-widget-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                TrinitiCuratorRenderWidgetResponseV1Mixin::create(),
            ]
        );
    }
}
