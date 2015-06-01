<?php
/**
 * In This Conversation module.
 *
 * @copyright 2009-2015 Vanilla Forums Inc.
 * @license http://www.opensource.org/licenses/gpl-2.0.php GNU GPL v2
 * @package Conversations
 * @since 2.0
 */

/**
 * Renders a list of people in the specified conversation.
 */
class InThisConversationModule extends Gdn_Module {

    public function SetData($Data) {
        $this->Data = $Data;
    }

    public function AssetTarget() {
        return 'Panel';
    }

    public function ToString() {
        if (is_object($this->Data) && $this->Data->NumRows() > 0)
            return parent::ToString();

        return '';
    }

}
