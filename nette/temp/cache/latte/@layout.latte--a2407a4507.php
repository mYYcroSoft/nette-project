<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\jsivc\OneDrive\Dokumenty\GitHub\nette-project\nette\app\UI/@layout.latte */
final class Template_a2407a4507 extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\jsivc\\OneDrive\\Dokumenty\\GitHub\\nette-project\\nette\\app\\UI/@layout.latte';

	public const Blocks = [
		['content' => 'blockContent', 'scripts' => 'blockScripts'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">

	<title>';
		if ($this->hasBlock('title')) /* line 7 */ {
			$this->renderBlock('title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('stripHtml', $ʟ_fi, $s));
			}) /* line 7 */;
			echo ' | ';
		}
		echo 'Nette Web</title>
</head>

<body>
';
		$this->renderBlock('content', get_defined_vars()) /* line 11 */;
		echo "\n";
		$this->renderBlock('scripts', get_defined_vars()) /* line 23 */;
		echo '</body>
</html>
';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['post' => '14'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 11 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '		<h1>Můj blog</h1>

';
		foreach ($posts as $post) /* line 14 */ {
			echo '		<div class="post">
			<div class="date">';
			echo LR\Filters::escapeHtmlText(($this->filters->date)($post->created_at, 'F j, Y')) /* line 15 */;
			echo '</div>

			<h2>';
			echo LR\Filters::escapeHtmlText($post->title) /* line 17 */;
			echo '</h2>

			<div>';
			echo LR\Filters::escapeHtmlText(($this->filters->truncate)($post->content, 256)) /* line 19 */;
			echo '</div>
		</div>
';

		}
	}


	/** {block scripts} on line 23 */
	public function blockScripts(array $ʟ_args): void
	{
		echo '	<script src="https://unpkg.com/nette-forms@3/src/assets/netteForms.js"></script>
';
	}
}
