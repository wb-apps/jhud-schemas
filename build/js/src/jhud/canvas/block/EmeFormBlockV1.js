// @link https://schemas.jenniferhudsonshow.com/json-schema/jhud/canvas/block/eme-form-block/1-0-0.json#
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasBlockV1Mixin from '@triniti/schemas/triniti/canvas/mixin/block/BlockV1Mixin';
import TrinitiCanvasBlockV1Trait from '@triniti/schemas/triniti/canvas/mixin/block/BlockV1Trait';
import TrinitiCanvasEmeFormBlockV1Mixin from '@triniti/schemas/triniti/canvas/mixin/eme-form-block/EmeFormBlockV1Mixin';
import TrinitiCanvasEmeFormBlockV1Trait from '@triniti/schemas/triniti/canvas/mixin/eme-form-block/EmeFormBlockV1Trait';

export default class EmeFormBlockV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:jhud:canvas:block:eme-form-block:1-0-0', EmeFormBlockV1,
      [],
      [
        TrinitiCanvasBlockV1Mixin.create(),
        TrinitiCanvasEmeFormBlockV1Mixin.create(),
      ],
    );
  }
}

TrinitiCanvasBlockV1Trait(EmeFormBlockV1);
TrinitiCanvasEmeFormBlockV1Trait(EmeFormBlockV1);
MessageResolver.register('jhud:canvas:block:eme-form-block', EmeFormBlockV1);
Object.freeze(EmeFormBlockV1);
Object.freeze(EmeFormBlockV1.prototype);
