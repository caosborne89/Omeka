
		<a id="add_section" href="javascript:void(0);">Add This Section</a> or <a id="cancel-add" href="javascript:void(0);">Cancel</a>

	<fieldset>
	<div class="field"><?php text(array('name'=>'Section[title]', 'id'=>'title', 'class'=>'textinput'), $section->title, 'Title for the Section'); ?></div>
	<div class="field"><?php textarea(array('name'=>'Section[description]', 'id'=>'description', 'class'=>'textinput', 'rows'=>'10','cols'=>'40'), $section->description, 'Description for the Section'); ?></div>
	<div class="field"><?php text(array('name'=>'Section[slug]', 'class'=>'textinput'), $section->slug, 'URL Slug (optional)'); ?></div>
	</fieldset>
	