<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\jsivc\OneDrive\Dokumenty\GitHub\nette-project\nette\app\UI/@layout.latte */
final class Template_a2407a4507 extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\jsivc\\OneDrive\\Dokumenty\\GitHub\\nette-project\\nette\\app\\UI/@layout.latte';

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

    <ul class="navig">
        <li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:')) /* line 30 */;
		echo '">Články</a></li>
';
		if ($user->isLoggedIn()) /* line 31 */ {
			echo '            <li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Sign:out')) /* line 32 */;
			echo '">Odhlásit</a></li>
';
		} else /* line 33 */ {
			echo '            <li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Sign:in')) /* line 34 */;
			echo '">Přihlásit</a></li>
';
		}
		echo '    </ul>

';
		$this->renderBlock('content', get_defined_vars()) /* line 38 */;
		echo '

</body>
</html>
';
	}


	/** {block content} on line 38 */
	public function blockContent(array $ʟ_args): void
	{
	}
}
