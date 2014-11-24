<?php

/**
 * Abstract class for representing Xmpp Stanzas.
 *
 * @category  XMPP
 * @package   XMPP
 * @author    Alex Mace <a@m.me.uk>
 * @copyright 2010-2011 Alex Mace (http://m.me.uk)
 * @license   http://m.me.uk/license New BSD License
 * @link      http://m.me.uk/xmpp
 */
abstract class Xmpp_Stanza
{

    protected $type = null;
    private $_from = null;
    private $_to = null;
    private $_id = null;

    /**
     * Class constructor, sets up common class variables.
     *
     * @param SimpleXMLElement $stanza The XML itself for the stanza.
     */
    public function __construct(SimpleXMLElement $stanza)
    {

        if (isset($stanza['from'])) {
            $this->_from = (string) $stanza['from'];
        }

        if (isset($stanza['to'])) {
            $this->_to = (string) $stanza['to'];
        }

        if (isset($stanza['id'])) {
            $this->_id = (string) $stanza['id'];
        }
    }

    /**
     * Returns the JID of the sender of the stanza.
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->_from;
    }

    /**
     * Returns who the JID of who the stanza was sent to.
     *
     * @return string
     */
    public function getTo()
    {
        return $this->_to;
    }

    /**
     * Returns the value of the "type" attribute on the stanza.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns the "id" of the stanza.
     *
     * @return string
     */
    public function getId()
    {
        return $this->_id;
    }
}
