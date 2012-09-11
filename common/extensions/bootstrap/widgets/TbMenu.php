<?php
/**
 * TbMenu class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2012-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package bootstrap.widgets
 */

Yii::import('bootstrap.widgets.TbBaseMenu');

/**
 * Bootstrap menu.
 * @see http://twitter.github.com/bootstrap/components.html#navs
 */
class TbMenu extends TbBaseMenu
{
    // Menu types.
    const TYPE_TABS = 'tabs';
    const TYPE_PILLS = 'pills';
    const TYPE_LIST = 'list';

    /**
     * @var string the menu type.
     * Valid values are 'tabs' and 'pills'.
     */
    public $type;
    /**
     * @var boolean indicates whether to stack navigation items.
     */
    public $stacked = false;
    /**
     * @var string|array the scrollspy configuration.
     */
    public $scrollspy;
	/**
	 * @var boolean indicates whether dropdowns should be dropups instead.
	 */
	public $dropup = false;

    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();

        $classes = array('nav');

        $validTypes = array(self::TYPE_TABS, self::TYPE_PILLS, self::TYPE_LIST);

        if (isset($this->type) && in_array($this->type, $validTypes))
            $classes[] = 'nav-'.$this->type;

        if ($this->stacked && $this->type !== self::TYPE_LIST)
            $classes[] = 'nav-stacked';

    	if ($this->dropup === true)
			$classes[] = 'dropup';

        if (isset($this->scrollspy))
        {
            $scrollspy = is_string($this->scrollspy) ? array('target'=>$this->scrollspy) : $this->scrollspy;
            $this->widget('bootstrap.widgets.TbScrollSpy', $scrollspy);
        }

        if (!empty($classes))
        {
            $classes = implode(' ', $classes);
            if (isset($this->htmlOptions['class']))
                $this->htmlOptions['class'] .= ' '.$classes;
            else
                $this->htmlOptions['class'] = $classes;
        }
    }

    /**
     * Returns the divider css class.
     * @return string the class name
     */
    public function getDividerCssClass()
    {
        return $this->type === self::TYPE_LIST ? 'divider' : 'divider-vertical';
    }
}
