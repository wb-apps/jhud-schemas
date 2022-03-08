// @link https://schemas.jenniferhudsonshow.com/json-schema/jhud/sys/request/get-flagset-response/1-0-0.json#
import GdbotsNcrGetNodeResponseV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-response/GetNodeResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';

export default class GetFlagsetResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:jhud:sys:request:get-flagset-response:1-0-0', GetFlagsetResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsNcrGetNodeResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetFlagsetResponseV1);
MessageResolver.register('jhud:sys:request:get-flagset-response', GetFlagsetResponseV1);
Object.freeze(GetFlagsetResponseV1);
Object.freeze(GetFlagsetResponseV1.prototype);