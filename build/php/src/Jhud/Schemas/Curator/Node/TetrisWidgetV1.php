<?php
declare(strict_types=1);

// @link https://schemas.jenniferhudsonshow.com/json-schema/jhud/curator/node/tetris-widget/1-0-0.json#
namespace Jhud\Schemas\Curator\Node;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\Enum\NodeStatus;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Mixin as GdbotsNcrNodeV1Mixin;
use Triniti\Schemas\Curator\Mixin\TetrisWidget\TetrisWidgetV1Mixin as TrinitiCuratorTetrisWidgetV1Mixin;

final class TetrisWidgetV1 extends AbstractMessage
{
    const SCHEMA_ID = 'pbj:jhud:curator:node:tetris-widget:1-0-0';
    const SCHEMA_CURIE = 'jhud:curator:node:tetris-widget';
    const SCHEMA_CURIE_MAJOR = 'jhud:curator:node:tetris-widget:v1';
    const MIXINS = [
      'gdbots:ncr:mixin:node:v1',
      'gdbots:ncr:mixin:node',
      'triniti:curator:mixin:widget:v1',
      'triniti:curator:mixin:widget',
      'triniti:curator:mixin:tetris-widget:v1',
      'triniti:curator:mixin:tetris-widget',
      'gdbots:common:mixin:taggable:v1',
      'gdbots:common:mixin:taggable',
      'triniti:common:mixin:themeable:v1',
      'triniti:common:mixin:themeable',
      'triniti:curator:mixin:widget-has-search-request:v1',
      'triniti:curator:mixin:widget-has-search-request',
    ];

    use GdbotsNcrNodeV1Mixin;

    use TrinitiCuratorTetrisWidgetV1Mixin;

    protected static function defineSchema(): Schema
    {
        return new Schema(self::SCHEMA_ID, __CLASS__,
            [
                /*
                 * The "_id" value:
                 * - MUST NOT change for the life of the node.
                 * - SHOULD be globally unique
                 * - SHOULD be generated by the app (ideally in default value closure... e.g. UuidIdentifier::generate())
                 */
                Fb::create('_id', T\IdentifierType::create())
                    ->required()
                    ->withDefault(function() { return UuidIdentifier::generate(); })
                    ->className(UuidIdentifier::class)
                    ->overridable(true)
                    ->build(),
                Fb::create('status', T\StringEnumType::create())
                    ->withDefault("draft")
                    ->className(NodeStatus::class)
                    ->build(),
                Fb::create('etag', T\StringType::create())
                    ->maxLength(100)
                    ->pattern('^[\w\.:-]+$')
                    ->build(),
                Fb::create('created_at', T\MicrotimeType::create())
                    ->build(),
                /*
                 * A fully qualified reference to what created this node. This is intentionally a message-ref
                 * and not a user id because it is often a program that creates nodes, not a user.
                 */
                Fb::create('creator_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('updated_at', T\MicrotimeType::create())
                    ->useTypeDefault(false)
                    ->build(),
                /*
                 * A fully qualified reference to what updated this node. This is intentionally a message-ref
                 * and not a user id because it is often a program that updates nodes, not a user.
                 * E.g. "acme:iam:node:app:cli-scheduler" or "acme:iam:node:user:60c71df0-fda8-11e5-bfb9-30342d363854"
                 */
                Fb::create('updater_ref', T\MessageRefType::create())
                    ->build(),
                /*
                 * A reference to the last event that changed the state of this node.
                 * E.g. "acme:blog:event:article-published:60c71df0-fda8-11e5-bfb9-30342d363854"
                 */
                Fb::create('last_event_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('title', T\StringType::create())
                    ->build(),
                /*
                 * A string containing HTML that is injected into
                 * the application before the widget renders.
                 */
                Fb::create('pre_render_code', T\TextType::create())
                    ->build(),
                /*
                 * A string containing HTML that is injected into
                 * the application after the widget renders.
                 */
                Fb::create('post_render_code', T\TextType::create())
                    ->build(),
                Fb::create('show_border', T\BooleanType::create())
                    ->build(),
                Fb::create('show_header', T\BooleanType::create())
                    ->withDefault(true)
                    ->build(),
                Fb::create('header_text', T\StringType::create())
                    ->build(),
                Fb::create('partner_url', T\TextType::create())
                    ->format(Format::URL)
                    ->build(),
                Fb::create('partner_text', T\StringType::create())
                    ->build(),
                Fb::create('view_all_url', T\TextType::create())
                    ->format(Format::URL)
                    ->build(),
                Fb::create('view_all_text', T\StringType::create())
                    ->build(),
                Fb::create('layout', T\StringType::create())
                    ->format(Format::SLUG)
                    ->build(),
                /*
                 * Tags is a map that categorizes data or tracks references in
                 * external systems. The tags names should be consistent and descriptive,
                 * e.g. fb_user_id:123, salesforce_customer_id:456.
                 */
                Fb::create('tags', T\StringType::create())
                    ->asAMap()
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
                /*
                 * A string used to indicate that a visual treatment should be
                 * applied to a piece of content, e.g. "christmas" or "taco".
                 */
                Fb::create('theme', T\StringType::create())
                    ->format(Format::SLUG)
                    ->build(),
                /*
                 * When nodes have been acquired by another process you can populate
                 * this field instead of "search_request".
                 */
                Fb::create('prefetched_nodes', T\MessageType::create())
                    ->asAList()
                    ->anyOfCuries([
                        'gdbots:ncr:mixin:node',
                    ])
                    ->build(),
                Fb::create('search_request', T\MessageType::create())
                    ->anyOfCuries([
                        'triniti:curator:mixin:widget-search-request',
                    ])
                    ->build(),
                Fb::create('show_pagination', T\BooleanType::create())
                    ->build(),
                Fb::create('show_item_cta_text', T\BooleanType::create())
                    ->build(),
                Fb::create('show_item_date', T\BooleanType::create())
                    ->build(),
                Fb::create('show_item_duration', T\BooleanType::create())
                    ->build(),
                Fb::create('show_item_excerpt', T\BooleanType::create())
                    ->build(),
                Fb::create('show_item_icon', T\BooleanType::create())
                    ->build(),
                Fb::create('show_item_media_count', T\BooleanType::create())
                    ->build(),
            ],
            self::MIXINS
        );
    }
}
