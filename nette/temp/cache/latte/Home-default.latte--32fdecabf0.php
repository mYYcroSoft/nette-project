<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\jsivc\OneDrive\Dokumenty\GitHub\nette-project\nette\app\UI\Home/default.latte */
final class Template_32fdecabf0 extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\jsivc\\OneDrive\\Dokumenty\\GitHub\\nette-project\\nette\\app\\UI\\Home/default.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 41 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['post' => '44'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 41 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '	<h1>Můj blog</h1>

';
		foreach ($posts as $post) /* line 44 */ {
			echo '	<div class="post">
		<div class="date">';
			echo LR\Filters::escapeHtmlText(($this->filters->date)($post->created_at, 'F j, Y')) /* line 45 */;
			echo '</div>

		<h2>';
			echo LR\Filters::escapeHtmlText($post->title) /* line 47 */;
			echo '</h2>

		<div>';
			echo LR\Filters::escapeHtmlText(($this->filters->truncate)($post->content, 256)) /* line 49 */;
			echo '</div>
	</div>
';

		}
	}
}
