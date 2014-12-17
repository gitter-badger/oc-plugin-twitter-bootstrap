<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\TwitterBootstrap\Components
 */

namespace AxC\TwitterBootstrap\Components;

/**
 * Twitter Bootstrap component class.
 */
class TwitterBootstrap extends \Cms\Classes\ComponentBase
{
	/**
	 * Return the component details.
	 * @return array
	 */
	public function componentDetails()
	{
		return [
			'name'				=> trans('axc.twitterboostrap::lang.component.name'),
			'description'	=> trans('axc.twitterboostrap::lang.component.description')
		];
	}

	/**
	 * @todo
	 */
	public function defineProperties()
	{
		return [
			'type' => [
				'title' => 'Component Type',
				'description' => 'The component type',
				'default' => 'modal',
				'type' => 'dropdown'
			],
			'id' => [
				'title' => 'Component ID',
				'description' => 'The component ID',
				'default' => 'modal-id',
				'type' => 'string',
				'validationPattern' => '^[a-zA-Z0-9\-\_]*$',
				'validationMessage' => "The component ID property can contain only alphanumeric, '-' and '_' characters"
			 ],
			'title' => [
				'title' => 'Component Title',
				'description' => 'The component title',
				'default' => 'modal-title',
				'type' => 'string',
				'validationPattern' => '^[a-zA-Z0-9\-\_]*$',
				'validationMessage' => "The component title property can contain only alphanumeric, '-' and '_' characters"
			]
		];
	}

	/**
	 * @todo
	 */
	public function getTypeOptions()
	{
		return ['modal' => 'Modal'];
	}

	/**
	 * Add default render settings to component.
	 * @return null
	 */
	public function onRender()
	{
		$this->page['component'] = $this->property('component', 'modal');
		$this->page['id'] = $this->property('id', 'modal-id');
		$this->page['title'] = $this->property('title', 'modal-title');
	}
}