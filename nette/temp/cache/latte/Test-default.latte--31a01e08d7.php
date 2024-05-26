<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\jsivc\OneDrive\Dokumenty\GitHub\nette-project\nette\app\UI\Test/default.latte */
final class Template_31a01e08d7 extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\jsivc\\OneDrive\\Dokumenty\\GitHub\\nette-project\\nette\\app\\UI\\Test/default.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<h1>Value</h1>

<span>';
		echo LR\Filters::escapeHtmlText($name) /* line 3 */;
		echo '</span>
<span>';
		echo LR\Filters::escapeHtmlText($id) /* line 4 */;
		echo '</span>';
	}
}
