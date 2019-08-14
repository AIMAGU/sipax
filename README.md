<h1 align="center">
    <a href="http://demos.krajee.com" title="Krajee Demos" target="_blank">
        <img src="https://github.com/AIMAGU/sipax/blob/master/sipax-git.png" alt="Sipax Logo"/>
    </a>
    <br>
    Sistem Pakar Diagnosis Penyakit Anthrax pada Hewan dengan Metode Certainty Factor
    <hr>
    <a href="https://paypal.me/aimagu"
       title="Donate via Paypal" target="_blank">
        <img src="http://kartik-v.github.io/bootstrap-fileinput-samples/samples/donate.png" alt="Donate"/>
    </a>
</h1>

Aplikasi berbasis website menggunakan PHP dengan framework Yii versi 2 menerapkan metode forward chaining dalam proses penentuan gejala dan pengolahan nilai kepastian menggunakan metode certainty factor.

> NOTE: Aplikasi ini dibangun pada 29 Juni 2019. Pastikan selalu memperbarui apabila terdapat pembaruan sistem.

## Paket Aplikasi

Pada aplikasi ini terdiri dari beberapa modul diantaranya:

- Modul Gejala 
- Modul Diagnosa
- Modul Pakar
- Modul Aturan / Basis Pengetahuan
- Modul User / Pengguna 
- Modul Konsultasi

## Kebutuhan Sistem

Adapun kebutuhan sistem untuk menjalankan program ini diantaranya:
- Yii Framework versi 2 keatas
- Web server
- PostgreSQL / MySQL
- Bootstrap versi 4.0
- PHP versi 7 keatas

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/). Remember to refer to the [composer.json](https://github.com/kartik-v/yii2-widgets/blob/master/composer.json) for 
this extension's requirements and dependencies. 


### Pre-requisites

> Note: Check the [composer.json](https://github.com/kartik-v/yii2-widgets/blob/master/composer.json) for this extension's requirements and dependencies. 
Read this [web tip /wiki](http://webtips.krajee.com/setting-composer-minimum-stability-application/) on setting the `minimum-stability` settings for your application's composer.json.

### Install

Clone master ini

```
git clone https://github.com/AIMAGU/sipax.git
```

## Release Updates

> Refer the [CHANGE LOG](https://github.com/kartik-v/yii2-widgets/blob/master/CHANGE.md) for details on changes to various releases.

The widgets currently available in **yii2-widgets** are grouped by the type of usage.

### Demo
You can see a [demonstration here](http://sipax.co) on usage of these widgets with documentation and examples.

## Usage

### How to call?
```php
	// add this in your view
	use kartik\widgets\ActiveForm;
	$form = ActiveForm::begin();
```

### ActiveForm
```php
	// Vertical Form
	$form = ActiveForm::begin([
		'id' => 'form-signup',
		'type' => ActiveForm::TYPE_VERTICAL
	]);
  
	// Inline Form
	$form = ActiveForm::begin([
		'id' => 'form-login', 
		'type' => ActiveForm::TYPE_INLINE,
		'fieldConfig' => ['autoPlaceholder'=>true]
	]);

  	// Horizontal Form Configuration
  	$form = ActiveForm::begin([
  		'id' => 'form-signup', 
  		'type' => ActiveForm::TYPE_HORIZONTAL,
		'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_SMALL]
	]);
```

### ActiveField
```php
	// Prepend an addon text
   	echo $form->field($model, 'email', ['addon' => ['prepend' => ['content'=>'@']]]);
   	
   	// Append an addon text
	echo $form->field($model, 'amount_paid', [
  		'addon' => ['append' => ['content'=>'.00']]
	]);
	
	// Formatted addons (like icons)
	echo $form->field($model, 'phone', [
		'addon' => [
			'prepend' => [
				'content' => '<i class="glyphicon glyphicon-phone"></i>'
			]
		]
	]);
	
	// Formatted addons (inputs)
	echo $form->field($model, 'phone', [
		'addon' => [
			'prepend' => [
				'content' => '<input type="radio">'
			]
		]
	]);
	
	// Formatted addons (buttons)
	echo $form->field($model, 'phone', [
		'addon' => [
			'prepend' => [
				'content' => Html::button('Go', ['class'=>'btn btn-primary'])
			]
			'asButton' => true
		]
	]);
```

### DepDrop
```php
	// Normal parent select
	echo $form->field($model, 'cat')->dropDownList($catList, ['id'=>'cat-id']);

	// Dependent Dropdown
    echo $form->field($model, 'subcat')->widget(DepDrop::classname(), [
         'options' => ['id'=>'subcat-id'],
         'pluginOptions'=>[
             'depends'=>['cat-id'],
             'placeholder' => 'Select...',
             'url' => Url::to(['/site/subcat'])
         ]
     ]);
```

### Select2
```php
	// Normal select with ActiveForm & model
	echo $form->field($model, 'state_1')->widget(Select2::classname(), [
		'data' => array_merge(["" => ""], $data),
		'language' => 'de',
		'options' => ['placeholder' => 'Select a state ...'],
		'pluginOptions' => [
			'allowClear' => true
		],
	]);

	// Multiple select without model
	echo Select2::widget([
		'name' => 'state_2',
		'value' => '',
		'data' => $data,
		'options' => ['multiple' => true, 'placeholder' => 'Select states ...']
	]);
```

### Typeahead
```php
use kartik\widgets\TypeaheadBasic;

// TypeaheadBasic usage with ActiveForm and model
echo $form->field($model, 'state_3')->widget(Typeahead::classname(), [
	'data' => $data,
    'pluginOptions' => ['highlight' => true],
	'options' => ['placeholder' => 'Filter as you type ...'],
]);

// Typeahead usage with ActiveForm and model
echo $form->field($model, 'state_4')->widget(Typeahead::classname(), [
	'dataset' => [
		[
			'local' => $data,
			'limit' => 10
		]
	],
    'pluginOptions' => ['highlight' => true],
	'options' => ['placeholder' => 'Filter as you type ...'],
]);
```

### DatePicker
```php
use kartik\widgets\DatePicker;

// usage without model
echo '<label>Check Issue Date</label>';
echo DatePicker::widget([
	'name' => 'check_issue_date', 
	'value' => date('d-M-Y', strtotime('+2 days')),
	'options' => ['placeholder' => 'Select issue date ...'],
	'pluginOptions' => [
		'format' => 'dd-M-yyyy',
		'todayHighlight' => true
	]
]);
```

### TimePicker
```php
use kartik\widgets\TimePicker;

// usage without model
echo '<label>Start Time</label>';
echo TimePicker::widget([
	'name' => 'start_time', 
	'value' => '11:24 AM',
	'pluginOptions' => [
		'showSeconds' => true
	]
]);
```

### DateTimePicker
```php
use kartik\widgets\DateTimePicker;

// usage without model
echo '<label>Start Date/Time</label>';
echo DateTimePicker::widget([
    'name' => 'datetime_10',
    'options' => ['placeholder' => 'Select operating time ...'],
    'convertFormat' => true,
    'pluginOptions' => [
        'format' => 'd-M-Y g:i A',
        'startDate' => '01-Mar-2014 12:00 AM',
        'todayHighlight' => true
    ]
]);
```

### TouchSpin
```php
use kartik\widgets\TouchSpin;

echo TouchSpin::widget([
    'name' => 'volume',
    'options' => ['placeholder' => 'Adjust...'],
    'pluginOptions' => ['step' => 1]
]);
```

### FileInput
```php
use kartik\widgets\FileInput;

// Usage with ActiveForm and model
echo $form->field($model, 'avatar')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],
]);

// With model & without ActiveForm
echo '<label class="control-label">Add Attachments</label>';
echo FileInput::widget([
    'model' => $model,
    'attribute' => 'attachment_1',
    'options' => ['multiple' => true]
]);
```

### ColorInput
```php
use kartik\widgets\ColorInput;

// Usage with ActiveForm and model
echo $form->field($model, 'color')->widget(ColorInput::classname(), [
    'options' => ['placeholder' => 'Select color ...'],
]);

// With model & without ActiveForm
echo '<label class="control-label">Select Color</label>';
echo ColorInput::widget([
    'model' => $model,
    'attribute' => 'saturation',
]);
```

### RangeInput
```php
use kartik\widgets\RangeInput;

// Usage with ActiveForm and model
echo $form->field($model, 'rating')->widget(RangeInput::classname(), [
    'options' => ['placeholder' => 'Select color ...'],
    'html5Options' => ['min'=>0, 'max'=>1, 'step'=>1],
    'addon' => ['append'=>['content'=>'star']]
]);

// With model & without ActiveForm
echo '<label class="control-label">Adjust Contrast</label>';
echo RangeInput::widget([
    'model' => $model,
    'attribute' => 'contrast',
    'addon' => ['append'=>['content'=>'%']]
]);
```

### SwitchInput
```php
use kartik\widgets\SwitchInput;

// Usage with ActiveForm and model
echo $form->field($model, 'status')->widget(SwitchInput::classname(), [
    'type' => SwitchInput::CHECKBOX
]);


// With model & without ActiveForm
echo SwitchInput::widget([
    'name' => 'status_1',
    'type' => SwitchInput::RADIO
]);
```

### StarRating
```php
use kartik\widgets\StarRating;

// Usage with ActiveForm and model
echo $form->field($model, 'rating')->widget(StarRating::classname(), [
    'pluginOptions' => ['size'=>'lg']
]);


// With model & without ActiveForm
echo StarRating::widget([
    'name' => 'rating_1',
    'pluginOptions' => ['disabled'=>true, 'showClear'=>false]
]);
```

### Spinner
```php
use kartik\widgets\Spinner;
<div class="well">
<?= Spinner::widget([
    'preset' => Spinner::LARGE,
    'color' => 'blue',
    'align' => 'left'
])?>
</div>
```

### Affix
```php
$content = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.';
$items = [[
	'url' => '#sec-1',
	'label' => 'Section 1',
	'icon' => 'play-circle',
	'content' => $content,
	'items' => [
		['url' => '#sec-1-1', 'label' => 'Section 1.1', 'content' => $content],
		['url' => '#sec-1-2', 'label' => 'Section 1.2', 'content' => $content],
		['url' => '#sec-1-3', 'label' => 'Section 1.3', 'content' => $content],
		['url' => '#sec-1-4', 'label' => 'Section 1.4', 'content' => $content],
		['url' => '#sec-1-5', 'label' => 'Section 1.5', 'content' => $content],
	],
]];

// Displays sidebar menu
echo Affix::widget([
	'items' => $items, 
	'type' => 'menu'
]);

// Displays body sections
echo Affix::widget([
	'items' => $items, 
	'type' => 'body'
]);
```

### SideNav
```php
use kartik\widgets\SideNav;
     
echo SideNav::widget([
	'type' => SideNav::TYPE_DEFAULT,
	'heading' => 'Options',
	'items' => [
		[
			'url' => '#',
			'label' => 'Home',
			'icon' => 'home'
		],
		[
			'label' => 'Help',
			'icon' => 'question-sign',
			'items' => [
				['label' => 'About', 'icon'=>'info-sign', 'url'=>'#'],
				['label' => 'Contact', 'icon'=>'phone', 'url'=>'#'],
			],
		],
	],
]);
```

#### Alert
```php
use kartik\widgets\Alert;

echo Alert::widget([
	'type' => Alert::TYPE_INFO,
	'title' => 'Note',
	'titleOptions' => ['icon' => 'info-sign'],
	'body' => 'This is an informative alert'
]);
```

#### Growl
```php
use kartik\widgets\Growl;

echo Growl::widget([
	'type' => Growl::TYPE_SUCCESS,
	'icon' => 'glyphicon glyphicon-ok-sign',
	'title' => 'Note',
	'showSeparator' => true,
	'body' => 'This is a successful growling alert.'
]);
```

#### AlertBlock
```php
use kartik\widgets\AlertBlock;

echo AlertBlock::widget([
	'type' => AlertBlock::TYPE_ALERT,
	'useSessionFlash' => true
]);
```

## License

**yii2-widgets** is released under the BSD-3-Clause License. See the bundled `LICENSE.md` for details.
