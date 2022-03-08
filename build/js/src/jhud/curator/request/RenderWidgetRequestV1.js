// @link https://schemas.jenniferhudsonshow.com/json-schema/jhud/curator/request/render-widget-request/1-0-0.json#
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCuratorRenderWidgetRequestV1Mixin from '@triniti/schemas/triniti/curator/mixin/render-widget-request/RenderWidgetRequestV1Mixin';

export default class RenderWidgetRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:jhud:curator:request:render-widget-request:1-0-0', RenderWidgetRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        TrinitiCuratorRenderWidgetRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(RenderWidgetRequestV1);
MessageResolver.register('jhud:curator:request:render-widget-request', RenderWidgetRequestV1);
Object.freeze(RenderWidgetRequestV1);
Object.freeze(RenderWidgetRequestV1.prototype);
