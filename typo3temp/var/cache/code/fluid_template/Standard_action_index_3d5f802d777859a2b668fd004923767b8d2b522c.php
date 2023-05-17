<?php

class Standard_action_index_3d5f802d777859a2b668fd004923767b8d2b522c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
    <div class="row row-cols-auto align-items-center g-3">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
            <div class="col">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
                    ';
$array16 = array (
);
$output15 .= $renderingContext->getVariableProvider()->getByPath('manyTemplatesMenu', $array16);

$output15 .= '
                ';
return $output15;
};
$arguments13 = array();
$arguments13['value'] = NULL;

$output12 .= isset($arguments13['value']) ? $arguments13['value'] : $renderChildrenClosure14();

$output12 .= '
            </div>
        ';
return $output12;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('manyTemplatesMenu', $array10);

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = $renderChildrenClosure8;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
        <div class="col mb-3">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['table'] = NULL;
$arguments17['row'] = NULL;
$arguments17['size'] = 'small';
$arguments17['alternativeMarkupIdentifier'] = NULL;
$arguments17['table'] = 'sys_template';
$array19 = array (
);$arguments17['row'] = $renderingContext->getVariableProvider()->getByPath('templateRecord', $array19);

$output6 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output6 .= '
            <strong>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$array22 = array (
);return $renderingContext->getVariableProvider()->getByPath('linkWrapTemplateTitle', $array22);
};
$arguments20 = array();
$arguments20['value'] = NULL;

$output6 .= isset($arguments20['value']) ? $arguments20['value'] : $renderChildrenClosure21();

$output6 .= '
            </strong>
        </div>
    </div>
';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('existTemplate', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output398 = '';

$output398 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
$output401 = '';

$output401 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$output501 = '';

$output501 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure503 = function() use ($renderingContext, $self) {
$output504 = '';

$output504 .= '
                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments505 = array();
$arguments505['key'] = NULL;
$arguments505['id'] = NULL;
$arguments505['default'] = NULL;
$arguments505['arguments'] = NULL;
$arguments505['extensionName'] = NULL;
$arguments505['languageKey'] = NULL;
$arguments505['alternativeLanguageKeys'] = NULL;
$arguments505['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:editProperty';

$output504 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext)]);

$output504 .= '</h3>
                <div class="row row-cols-auto align-items-end g-1">
                    <div class="col">
                        <label class="form-label">';
$array507 = array (
);
$output504 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array507)]);

$output504 .= ' =</label>
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments508 = array();
$arguments508['additionalAttributes'] = NULL;
$arguments508['data'] = NULL;
$arguments508['aria'] = NULL;
$arguments508['name'] = NULL;
$arguments508['value'] = NULL;
$arguments508['property'] = NULL;
$arguments508['autofocus'] = NULL;
$arguments508['disabled'] = NULL;
$arguments508['maxlength'] = NULL;
$arguments508['readonly'] = NULL;
$arguments508['size'] = NULL;
$arguments508['placeholder'] = NULL;
$arguments508['pattern'] = NULL;
$arguments508['errorClass'] = 'f3-form-error';
$arguments508['class'] = NULL;
$arguments508['dir'] = NULL;
$arguments508['id'] = NULL;
$arguments508['lang'] = NULL;
$arguments508['style'] = NULL;
$arguments508['title'] = NULL;
$arguments508['accesskey'] = NULL;
$arguments508['tabindex'] = NULL;
$arguments508['onclick'] = NULL;
$arguments508['required'] = false;
$arguments508['type'] = 'text';
$arguments508['class'] = 'form-control';
$output510 = '';

$output510 .= 'data[';
$array511 = array (
);
$output510 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array511);

$output510 .= '][value]';
$arguments508['name'] = $output510;
$array512 = array (
);$arguments508['value'] = $renderingContext->getVariableProvider()->getByPath('theSetupValue', $array512);

$output504 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext);

$output504 .= '
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure514 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments513 = array();
$arguments513['additionalAttributes'] = NULL;
$arguments513['data'] = NULL;
$arguments513['aria'] = NULL;
$arguments513['name'] = NULL;
$arguments513['value'] = NULL;
$arguments513['property'] = NULL;
$arguments513['disabled'] = NULL;
$arguments513['class'] = NULL;
$arguments513['dir'] = NULL;
$arguments513['id'] = NULL;
$arguments513['lang'] = NULL;
$arguments513['style'] = NULL;
$arguments513['title'] = NULL;
$arguments513['accesskey'] = NULL;
$arguments513['tabindex'] = NULL;
$arguments513['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure516 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments515 = array();
$arguments515['key'] = NULL;
$arguments515['id'] = NULL;
$arguments515['default'] = NULL;
$arguments515['arguments'] = NULL;
$arguments515['extensionName'] = NULL;
$arguments515['languageKey'] = NULL;
$arguments515['alternativeLanguageKeys'] = NULL;
$arguments515['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:updateButton';
$arguments513['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments515, $renderChildrenClosure516, $renderingContext);
$arguments513['class'] = 'btn btn-default';
$arguments513['name'] = 'update_value';

$output504 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments513, $renderChildrenClosure514, $renderingContext);

$output504 .= '
                    </div>
                </div>

                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments517 = array();
$arguments517['key'] = NULL;
$arguments517['id'] = NULL;
$arguments517['default'] = NULL;
$arguments517['arguments'] = NULL;
$arguments517['extensionName'] = NULL;
$arguments517['languageKey'] = NULL;
$arguments517['alternativeLanguageKeys'] = NULL;
$arguments517['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:addProperty';

$output504 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments517, $renderChildrenClosure518, $renderingContext)]);

$output504 .= '</h3>
                <div class="row row-cols-auto align-items-end g-1">
                    <div class="col">
                        <label class="visually-hidden">';
$array519 = array (
);
$output504 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array519)]);

$output504 .= '.</label>
                        <div class="input-group">
                            <div class="input-group-addon">';
$array520 = array (
);
$output504 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array520)]);

$output504 .= '.</div>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure522 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments521 = array();
$arguments521['additionalAttributes'] = NULL;
$arguments521['data'] = NULL;
$arguments521['aria'] = NULL;
$arguments521['name'] = NULL;
$arguments521['value'] = NULL;
$arguments521['property'] = NULL;
$arguments521['autofocus'] = NULL;
$arguments521['disabled'] = NULL;
$arguments521['maxlength'] = NULL;
$arguments521['readonly'] = NULL;
$arguments521['size'] = NULL;
$arguments521['placeholder'] = NULL;
$arguments521['pattern'] = NULL;
$arguments521['errorClass'] = 'f3-form-error';
$arguments521['class'] = NULL;
$arguments521['dir'] = NULL;
$arguments521['id'] = NULL;
$arguments521['lang'] = NULL;
$arguments521['style'] = NULL;
$arguments521['title'] = NULL;
$arguments521['accesskey'] = NULL;
$arguments521['tabindex'] = NULL;
$arguments521['onclick'] = NULL;
$arguments521['required'] = false;
$arguments521['type'] = 'text';
$arguments521['class'] = 'form-control';
$output523 = '';

$output523 .= 'data[';
$array524 = array (
);
$output523 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array524);

$output523 .= '][name]';
$arguments521['name'] = $output523;

$output504 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments521, $renderChildrenClosure522, $renderingContext);

$output504 .= '
                        </div>
                    </div>
                    <div class="col">
                        <label>=</label>
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure526 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments525 = array();
$arguments525['additionalAttributes'] = NULL;
$arguments525['data'] = NULL;
$arguments525['aria'] = NULL;
$arguments525['name'] = NULL;
$arguments525['value'] = NULL;
$arguments525['property'] = NULL;
$arguments525['autofocus'] = NULL;
$arguments525['disabled'] = NULL;
$arguments525['maxlength'] = NULL;
$arguments525['readonly'] = NULL;
$arguments525['size'] = NULL;
$arguments525['placeholder'] = NULL;
$arguments525['pattern'] = NULL;
$arguments525['errorClass'] = 'f3-form-error';
$arguments525['class'] = NULL;
$arguments525['dir'] = NULL;
$arguments525['id'] = NULL;
$arguments525['lang'] = NULL;
$arguments525['style'] = NULL;
$arguments525['title'] = NULL;
$arguments525['accesskey'] = NULL;
$arguments525['tabindex'] = NULL;
$arguments525['onclick'] = NULL;
$arguments525['required'] = false;
$arguments525['type'] = 'text';
$arguments525['class'] = 'form-control';
$output527 = '';

$output527 .= 'data[';
$array528 = array (
);
$output527 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array528);

$output527 .= '][propertyValue]';
$arguments525['name'] = $output527;

$output504 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments525, $renderChildrenClosure526, $renderingContext);

$output504 .= '
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure530 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments529 = array();
$arguments529['additionalAttributes'] = NULL;
$arguments529['data'] = NULL;
$arguments529['aria'] = NULL;
$arguments529['name'] = NULL;
$arguments529['value'] = NULL;
$arguments529['property'] = NULL;
$arguments529['disabled'] = NULL;
$arguments529['class'] = NULL;
$arguments529['dir'] = NULL;
$arguments529['id'] = NULL;
$arguments529['lang'] = NULL;
$arguments529['style'] = NULL;
$arguments529['title'] = NULL;
$arguments529['accesskey'] = NULL;
$arguments529['tabindex'] = NULL;
$arguments529['onclick'] = NULL;
$arguments529['class'] = 'btn btn-default';
$arguments529['name'] = 'add_property';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure532 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments531 = array();
$arguments531['key'] = NULL;
$arguments531['id'] = NULL;
$arguments531['default'] = NULL;
$arguments531['arguments'] = NULL;
$arguments531['extensionName'] = NULL;
$arguments531['languageKey'] = NULL;
$arguments531['alternativeLanguageKeys'] = NULL;
$arguments531['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:addButton';
$arguments529['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments531, $renderChildrenClosure532, $renderingContext);

$output504 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments529, $renderChildrenClosure530, $renderingContext);

$output504 .= '
                    </div>
                </div>

                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure534 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments533 = array();
$arguments533['key'] = NULL;
$arguments533['id'] = NULL;
$arguments533['default'] = NULL;
$arguments533['arguments'] = NULL;
$arguments533['extensionName'] = NULL;
$arguments533['languageKey'] = NULL;
$arguments533['alternativeLanguageKeys'] = NULL;
$arguments533['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:clearObject';

$output504 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments533, $renderChildrenClosure534, $renderingContext)]);

$output504 .= '</h3>

                <div class="row row-cols-auto align-items-end g-3">
                    <div class="col">
                        <div class="form-check">
                            <label class="form-check-label" for="clearValue-';
$array535 = array (
);
$output504 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array535)]);

$output504 .= '">
                                ';
$array536 = array (
);
$output504 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array536)]);

$output504 .= '
                            </label>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure538 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments537 = array();
$arguments537['additionalAttributes'] = NULL;
$arguments537['data'] = NULL;
$arguments537['aria'] = NULL;
$arguments537['name'] = NULL;
$arguments537['value'] = NULL;
$arguments537['property'] = NULL;
$arguments537['disabled'] = NULL;
$arguments537['errorClass'] = 'f3-form-error';
$arguments537['class'] = NULL;
$arguments537['dir'] = NULL;
$arguments537['id'] = NULL;
$arguments537['lang'] = NULL;
$arguments537['style'] = NULL;
$arguments537['title'] = NULL;
$arguments537['accesskey'] = NULL;
$arguments537['tabindex'] = NULL;
$arguments537['onclick'] = NULL;
$arguments537['checked'] = NULL;
$arguments537['multiple'] = false;
$arguments537['class'] = 'form-check-input';
$output539 = '';

$output539 .= 'data[';
$array540 = array (
);
$output539 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array540);

$output539 .= '][clearValue]';
$arguments537['name'] = $output539;
$output541 = '';

$output541 .= 'clearValue-';
$array542 = array (
);
$output541 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array542);
$arguments537['id'] = $output541;
$arguments537['value'] = 1;

$output504 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments537, $renderChildrenClosure538, $renderingContext);

$output504 .= '
                        </div>
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure544 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments543 = array();
$arguments543['additionalAttributes'] = NULL;
$arguments543['data'] = NULL;
$arguments543['aria'] = NULL;
$arguments543['name'] = NULL;
$arguments543['value'] = NULL;
$arguments543['property'] = NULL;
$arguments543['disabled'] = NULL;
$arguments543['class'] = NULL;
$arguments543['dir'] = NULL;
$arguments543['id'] = NULL;
$arguments543['lang'] = NULL;
$arguments543['style'] = NULL;
$arguments543['title'] = NULL;
$arguments543['accesskey'] = NULL;
$arguments543['tabindex'] = NULL;
$arguments543['onclick'] = NULL;
$arguments543['class'] = 'btn btn-default';
$arguments543['name'] = 'clear_object';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure546 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments545 = array();
$arguments545['key'] = NULL;
$arguments545['id'] = NULL;
$arguments545['default'] = NULL;
$arguments545['arguments'] = NULL;
$arguments545['extensionName'] = NULL;
$arguments545['languageKey'] = NULL;
$arguments545['alternativeLanguageKeys'] = NULL;
$arguments545['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:clearButton';
$arguments543['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments545, $renderChildrenClosure546, $renderingContext);

$output504 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments543, $renderChildrenClosure544, $renderingContext);

$output504 .= '
                    </div>
                </div>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure548 = function() use ($renderingContext, $self) {
$output552 = '';

$output552 .= '
                    <div class="row mt-3">
                        <div class="col-auto">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure554 = function() use ($renderingContext, $self) {
$output574 = '';

$output574 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
$output577 = '';

$output577 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure579 = function() use ($renderingContext, $self) {
$output583 = '';

$output583 .= '
                                        <a href="';
$array584 = array (
);
$output583 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array584)]);

$output583 .= '" class="btn btn-default">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure586 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments585 = array();
$arguments585['key'] = NULL;
$arguments585['id'] = NULL;
$arguments585['default'] = NULL;
$arguments585['arguments'] = NULL;
$arguments585['extensionName'] = NULL;
$arguments585['languageKey'] = NULL;
$arguments585['alternativeLanguageKeys'] = NULL;
$arguments585['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:addKey';
// Rendering Array
$array587 = array();
$array588 = array (
);$array587['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array588);
$arguments585['arguments'] = $array587;

$output583 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments585, $renderChildrenClosure586, $renderingContext)]);

$output583 .= '
                                        </a>
                                    ';
return $output583;
};
$arguments578 = array();
$arguments578['then'] = NULL;
$arguments578['else'] = NULL;
$arguments578['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array580 = array();
$array581 = array (
);$array580['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array581);

$expression582 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments578['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression582(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array580)
					),
					$renderingContext
				);
$arguments578['__thenClosure'] = $renderChildrenClosure579;

$output577 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments578, $renderChildrenClosure579, $renderingContext);

$output577 .= '
                                ';
return $output577;
};
$arguments575 = array();

$output574 .= '';

$output574 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure590 = function() use ($renderingContext, $self) {
$output591 = '';

$output591 .= '
                                    <a href="';
$array592 = array (
);
$output591 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array592)]);

$output591 .= '" class="btn btn-default">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure594 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments593 = array();
$arguments593['key'] = NULL;
$arguments593['id'] = NULL;
$arguments593['default'] = NULL;
$arguments593['arguments'] = NULL;
$arguments593['extensionName'] = NULL;
$arguments593['languageKey'] = NULL;
$arguments593['alternativeLanguageKeys'] = NULL;
$arguments593['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:removeKey';

$output591 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments593, $renderChildrenClosure594, $renderingContext)]);

$output591 .= '
                                    </a>
                                ';
return $output591;
};
$arguments589 = array();
$arguments589['if'] = NULL;

$output574 .= '';

$output574 .= '
                            ';
return $output574;
};
$arguments553 = array();
$arguments553['then'] = NULL;
$arguments553['else'] = NULL;
$arguments553['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array571 = array();
$array572 = array (
);$array571['0'] = $renderingContext->getVariableProvider()->getByPath('isNotInTopLevelKeyList', $array572);

$expression573 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments553['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression573(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array571)
					),
					$renderingContext
				);
$arguments553['__thenClosure'] = function() use ($renderingContext, $self) {
$output555 = '';

$output555 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
$output561 = '';

$output561 .= '
                                        <a href="';
$array562 = array (
);
$output561 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array562)]);

$output561 .= '" class="btn btn-default">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure564 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments563 = array();
$arguments563['key'] = NULL;
$arguments563['id'] = NULL;
$arguments563['default'] = NULL;
$arguments563['arguments'] = NULL;
$arguments563['extensionName'] = NULL;
$arguments563['languageKey'] = NULL;
$arguments563['alternativeLanguageKeys'] = NULL;
$arguments563['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:addKey';
// Rendering Array
$array565 = array();
$array566 = array (
);$array565['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array566);
$arguments563['arguments'] = $array565;

$output561 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments563, $renderChildrenClosure564, $renderingContext)]);

$output561 .= '
                                        </a>
                                    ';
return $output561;
};
$arguments556 = array();
$arguments556['then'] = NULL;
$arguments556['else'] = NULL;
$arguments556['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array558 = array();
$array559 = array (
);$array558['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array559);

$expression560 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments556['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression560(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array558)
					),
					$renderingContext
				);
$arguments556['__thenClosure'] = $renderChildrenClosure557;

$output555 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments556, $renderChildrenClosure557, $renderingContext);

$output555 .= '
                                ';
return $output555;
};
$arguments553['__elseClosures'][] = function() use ($renderingContext, $self) {
$output567 = '';

$output567 .= '
                                    <a href="';
$array568 = array (
);
$output567 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array568)]);

$output567 .= '" class="btn btn-default">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments569 = array();
$arguments569['key'] = NULL;
$arguments569['id'] = NULL;
$arguments569['default'] = NULL;
$arguments569['arguments'] = NULL;
$arguments569['extensionName'] = NULL;
$arguments569['languageKey'] = NULL;
$arguments569['alternativeLanguageKeys'] = NULL;
$arguments569['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:removeKey';

$output567 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext)]);

$output567 .= '
                                    </a>
                                ';
return $output567;
};

$output552 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments553, $renderChildrenClosure554, $renderingContext);

$output552 .= '
                        </div>
                    </div>
                ';
return $output552;
};
$arguments547 = array();
$arguments547['then'] = NULL;
$arguments547['else'] = NULL;
$arguments547['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array549 = array();
$array550 = array (
);$array549['0'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array550);

$expression551 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments547['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression551(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array549)
					),
					$renderingContext
				);
$arguments547['__thenClosure'] = $renderChildrenClosure548;

$output504 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments547, $renderChildrenClosure548, $renderingContext);

$output504 .= '
            ';
return $output504;
};
$arguments502 = array();

$output501 .= '';

$output501 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure596 = function() use ($renderingContext, $self) {
$output597 = '';

$output597 .= '
                ';
$array598 = array (
);
$output597 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array598)]);

$output597 .= ' = <strong>';
$array599 = array (
);
$output597 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theSetupValue', $array599)]);

$output597 .= '</strong>
            ';
return $output597;
};
$arguments595 = array();
$arguments595['if'] = NULL;

$output501 .= '';

$output501 .= '
        ';
return $output501;
};
$arguments402 = array();
$arguments402['then'] = NULL;
$arguments402['else'] = NULL;
$arguments402['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array498 = array();
$array499 = array (
);$array498['0'] = $renderingContext->getVariableProvider()->getByPath('existTemplate', $array499);

$expression500 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments402['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression500(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array498)
					),
					$renderingContext
				);
$arguments402['__thenClosure'] = function() use ($renderingContext, $self) {
$output404 = '';

$output404 .= '
                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments405 = array();
$arguments405['key'] = NULL;
$arguments405['id'] = NULL;
$arguments405['default'] = NULL;
$arguments405['arguments'] = NULL;
$arguments405['extensionName'] = NULL;
$arguments405['languageKey'] = NULL;
$arguments405['alternativeLanguageKeys'] = NULL;
$arguments405['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:editProperty';

$output404 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext)]);

$output404 .= '</h3>
                <div class="row row-cols-auto align-items-end g-1">
                    <div class="col">
                        <label class="form-label">';
$array407 = array (
);
$output404 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array407)]);

$output404 .= ' =</label>
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments408 = array();
$arguments408['additionalAttributes'] = NULL;
$arguments408['data'] = NULL;
$arguments408['aria'] = NULL;
$arguments408['name'] = NULL;
$arguments408['value'] = NULL;
$arguments408['property'] = NULL;
$arguments408['autofocus'] = NULL;
$arguments408['disabled'] = NULL;
$arguments408['maxlength'] = NULL;
$arguments408['readonly'] = NULL;
$arguments408['size'] = NULL;
$arguments408['placeholder'] = NULL;
$arguments408['pattern'] = NULL;
$arguments408['errorClass'] = 'f3-form-error';
$arguments408['class'] = NULL;
$arguments408['dir'] = NULL;
$arguments408['id'] = NULL;
$arguments408['lang'] = NULL;
$arguments408['style'] = NULL;
$arguments408['title'] = NULL;
$arguments408['accesskey'] = NULL;
$arguments408['tabindex'] = NULL;
$arguments408['onclick'] = NULL;
$arguments408['required'] = false;
$arguments408['type'] = 'text';
$arguments408['class'] = 'form-control';
$output410 = '';

$output410 .= 'data[';
$array411 = array (
);
$output410 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array411);

$output410 .= '][value]';
$arguments408['name'] = $output410;
$array412 = array (
);$arguments408['value'] = $renderingContext->getVariableProvider()->getByPath('theSetupValue', $array412);

$output404 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output404 .= '
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments413 = array();
$arguments413['additionalAttributes'] = NULL;
$arguments413['data'] = NULL;
$arguments413['aria'] = NULL;
$arguments413['name'] = NULL;
$arguments413['value'] = NULL;
$arguments413['property'] = NULL;
$arguments413['disabled'] = NULL;
$arguments413['class'] = NULL;
$arguments413['dir'] = NULL;
$arguments413['id'] = NULL;
$arguments413['lang'] = NULL;
$arguments413['style'] = NULL;
$arguments413['title'] = NULL;
$arguments413['accesskey'] = NULL;
$arguments413['tabindex'] = NULL;
$arguments413['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments415 = array();
$arguments415['key'] = NULL;
$arguments415['id'] = NULL;
$arguments415['default'] = NULL;
$arguments415['arguments'] = NULL;
$arguments415['extensionName'] = NULL;
$arguments415['languageKey'] = NULL;
$arguments415['alternativeLanguageKeys'] = NULL;
$arguments415['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:updateButton';
$arguments413['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments415, $renderChildrenClosure416, $renderingContext);
$arguments413['class'] = 'btn btn-default';
$arguments413['name'] = 'update_value';

$output404 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext);

$output404 .= '
                    </div>
                </div>

                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments417 = array();
$arguments417['key'] = NULL;
$arguments417['id'] = NULL;
$arguments417['default'] = NULL;
$arguments417['arguments'] = NULL;
$arguments417['extensionName'] = NULL;
$arguments417['languageKey'] = NULL;
$arguments417['alternativeLanguageKeys'] = NULL;
$arguments417['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:addProperty';

$output404 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext)]);

$output404 .= '</h3>
                <div class="row row-cols-auto align-items-end g-1">
                    <div class="col">
                        <label class="visually-hidden">';
$array419 = array (
);
$output404 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array419)]);

$output404 .= '.</label>
                        <div class="input-group">
                            <div class="input-group-addon">';
$array420 = array (
);
$output404 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array420)]);

$output404 .= '.</div>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments421 = array();
$arguments421['additionalAttributes'] = NULL;
$arguments421['data'] = NULL;
$arguments421['aria'] = NULL;
$arguments421['name'] = NULL;
$arguments421['value'] = NULL;
$arguments421['property'] = NULL;
$arguments421['autofocus'] = NULL;
$arguments421['disabled'] = NULL;
$arguments421['maxlength'] = NULL;
$arguments421['readonly'] = NULL;
$arguments421['size'] = NULL;
$arguments421['placeholder'] = NULL;
$arguments421['pattern'] = NULL;
$arguments421['errorClass'] = 'f3-form-error';
$arguments421['class'] = NULL;
$arguments421['dir'] = NULL;
$arguments421['id'] = NULL;
$arguments421['lang'] = NULL;
$arguments421['style'] = NULL;
$arguments421['title'] = NULL;
$arguments421['accesskey'] = NULL;
$arguments421['tabindex'] = NULL;
$arguments421['onclick'] = NULL;
$arguments421['required'] = false;
$arguments421['type'] = 'text';
$arguments421['class'] = 'form-control';
$output423 = '';

$output423 .= 'data[';
$array424 = array (
);
$output423 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array424);

$output423 .= '][name]';
$arguments421['name'] = $output423;

$output404 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments421, $renderChildrenClosure422, $renderingContext);

$output404 .= '
                        </div>
                    </div>
                    <div class="col">
                        <label>=</label>
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments425 = array();
$arguments425['additionalAttributes'] = NULL;
$arguments425['data'] = NULL;
$arguments425['aria'] = NULL;
$arguments425['name'] = NULL;
$arguments425['value'] = NULL;
$arguments425['property'] = NULL;
$arguments425['autofocus'] = NULL;
$arguments425['disabled'] = NULL;
$arguments425['maxlength'] = NULL;
$arguments425['readonly'] = NULL;
$arguments425['size'] = NULL;
$arguments425['placeholder'] = NULL;
$arguments425['pattern'] = NULL;
$arguments425['errorClass'] = 'f3-form-error';
$arguments425['class'] = NULL;
$arguments425['dir'] = NULL;
$arguments425['id'] = NULL;
$arguments425['lang'] = NULL;
$arguments425['style'] = NULL;
$arguments425['title'] = NULL;
$arguments425['accesskey'] = NULL;
$arguments425['tabindex'] = NULL;
$arguments425['onclick'] = NULL;
$arguments425['required'] = false;
$arguments425['type'] = 'text';
$arguments425['class'] = 'form-control';
$output427 = '';

$output427 .= 'data[';
$array428 = array (
);
$output427 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array428);

$output427 .= '][propertyValue]';
$arguments425['name'] = $output427;

$output404 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext);

$output404 .= '
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments429 = array();
$arguments429['additionalAttributes'] = NULL;
$arguments429['data'] = NULL;
$arguments429['aria'] = NULL;
$arguments429['name'] = NULL;
$arguments429['value'] = NULL;
$arguments429['property'] = NULL;
$arguments429['disabled'] = NULL;
$arguments429['class'] = NULL;
$arguments429['dir'] = NULL;
$arguments429['id'] = NULL;
$arguments429['lang'] = NULL;
$arguments429['style'] = NULL;
$arguments429['title'] = NULL;
$arguments429['accesskey'] = NULL;
$arguments429['tabindex'] = NULL;
$arguments429['onclick'] = NULL;
$arguments429['class'] = 'btn btn-default';
$arguments429['name'] = 'add_property';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments431 = array();
$arguments431['key'] = NULL;
$arguments431['id'] = NULL;
$arguments431['default'] = NULL;
$arguments431['arguments'] = NULL;
$arguments431['extensionName'] = NULL;
$arguments431['languageKey'] = NULL;
$arguments431['alternativeLanguageKeys'] = NULL;
$arguments431['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:addButton';
$arguments429['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext);

$output404 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments429, $renderChildrenClosure430, $renderingContext);

$output404 .= '
                    </div>
                </div>

                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments433 = array();
$arguments433['key'] = NULL;
$arguments433['id'] = NULL;
$arguments433['default'] = NULL;
$arguments433['arguments'] = NULL;
$arguments433['extensionName'] = NULL;
$arguments433['languageKey'] = NULL;
$arguments433['alternativeLanguageKeys'] = NULL;
$arguments433['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:clearObject';

$output404 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext)]);

$output404 .= '</h3>

                <div class="row row-cols-auto align-items-end g-3">
                    <div class="col">
                        <div class="form-check">
                            <label class="form-check-label" for="clearValue-';
$array435 = array (
);
$output404 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array435)]);

$output404 .= '">
                                ';
$array436 = array (
);
$output404 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array436)]);

$output404 .= '
                            </label>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure438 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments437 = array();
$arguments437['additionalAttributes'] = NULL;
$arguments437['data'] = NULL;
$arguments437['aria'] = NULL;
$arguments437['name'] = NULL;
$arguments437['value'] = NULL;
$arguments437['property'] = NULL;
$arguments437['disabled'] = NULL;
$arguments437['errorClass'] = 'f3-form-error';
$arguments437['class'] = NULL;
$arguments437['dir'] = NULL;
$arguments437['id'] = NULL;
$arguments437['lang'] = NULL;
$arguments437['style'] = NULL;
$arguments437['title'] = NULL;
$arguments437['accesskey'] = NULL;
$arguments437['tabindex'] = NULL;
$arguments437['onclick'] = NULL;
$arguments437['checked'] = NULL;
$arguments437['multiple'] = false;
$arguments437['class'] = 'form-check-input';
$output439 = '';

$output439 .= 'data[';
$array440 = array (
);
$output439 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array440);

$output439 .= '][clearValue]';
$arguments437['name'] = $output439;
$output441 = '';

$output441 .= 'clearValue-';
$array442 = array (
);
$output441 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array442);
$arguments437['id'] = $output441;
$arguments437['value'] = 1;

$output404 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments437, $renderChildrenClosure438, $renderingContext);

$output404 .= '
                        </div>
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments443 = array();
$arguments443['additionalAttributes'] = NULL;
$arguments443['data'] = NULL;
$arguments443['aria'] = NULL;
$arguments443['name'] = NULL;
$arguments443['value'] = NULL;
$arguments443['property'] = NULL;
$arguments443['disabled'] = NULL;
$arguments443['class'] = NULL;
$arguments443['dir'] = NULL;
$arguments443['id'] = NULL;
$arguments443['lang'] = NULL;
$arguments443['style'] = NULL;
$arguments443['title'] = NULL;
$arguments443['accesskey'] = NULL;
$arguments443['tabindex'] = NULL;
$arguments443['onclick'] = NULL;
$arguments443['class'] = 'btn btn-default';
$arguments443['name'] = 'clear_object';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments445 = array();
$arguments445['key'] = NULL;
$arguments445['id'] = NULL;
$arguments445['default'] = NULL;
$arguments445['arguments'] = NULL;
$arguments445['extensionName'] = NULL;
$arguments445['languageKey'] = NULL;
$arguments445['alternativeLanguageKeys'] = NULL;
$arguments445['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:clearButton';
$arguments443['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext);

$output404 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext);

$output404 .= '
                    </div>
                </div>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
$output452 = '';

$output452 .= '
                    <div class="row mt-3">
                        <div class="col-auto">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
$output474 = '';

$output474 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure476 = function() use ($renderingContext, $self) {
$output477 = '';

$output477 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
$output483 = '';

$output483 .= '
                                        <a href="';
$array484 = array (
);
$output483 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array484)]);

$output483 .= '" class="btn btn-default">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments485 = array();
$arguments485['key'] = NULL;
$arguments485['id'] = NULL;
$arguments485['default'] = NULL;
$arguments485['arguments'] = NULL;
$arguments485['extensionName'] = NULL;
$arguments485['languageKey'] = NULL;
$arguments485['alternativeLanguageKeys'] = NULL;
$arguments485['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:addKey';
// Rendering Array
$array487 = array();
$array488 = array (
);$array487['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array488);
$arguments485['arguments'] = $array487;

$output483 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext)]);

$output483 .= '
                                        </a>
                                    ';
return $output483;
};
$arguments478 = array();
$arguments478['then'] = NULL;
$arguments478['else'] = NULL;
$arguments478['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array480 = array();
$array481 = array (
);$array480['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array481);

$expression482 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments478['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression482(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array480)
					),
					$renderingContext
				);
$arguments478['__thenClosure'] = $renderChildrenClosure479;

$output477 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output477 .= '
                                ';
return $output477;
};
$arguments475 = array();

$output474 .= '';

$output474 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure490 = function() use ($renderingContext, $self) {
$output491 = '';

$output491 .= '
                                    <a href="';
$array492 = array (
);
$output491 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array492)]);

$output491 .= '" class="btn btn-default">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments493 = array();
$arguments493['key'] = NULL;
$arguments493['id'] = NULL;
$arguments493['default'] = NULL;
$arguments493['arguments'] = NULL;
$arguments493['extensionName'] = NULL;
$arguments493['languageKey'] = NULL;
$arguments493['alternativeLanguageKeys'] = NULL;
$arguments493['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:removeKey';

$output491 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments493, $renderChildrenClosure494, $renderingContext)]);

$output491 .= '
                                    </a>
                                ';
return $output491;
};
$arguments489 = array();
$arguments489['if'] = NULL;

$output474 .= '';

$output474 .= '
                            ';
return $output474;
};
$arguments453 = array();
$arguments453['then'] = NULL;
$arguments453['else'] = NULL;
$arguments453['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array471 = array();
$array472 = array (
);$array471['0'] = $renderingContext->getVariableProvider()->getByPath('isNotInTopLevelKeyList', $array472);

$expression473 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments453['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression473(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array471)
					),
					$renderingContext
				);
$arguments453['__thenClosure'] = function() use ($renderingContext, $self) {
$output455 = '';

$output455 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
$output461 = '';

$output461 .= '
                                        <a href="';
$array462 = array (
);
$output461 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array462)]);

$output461 .= '" class="btn btn-default">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments463 = array();
$arguments463['key'] = NULL;
$arguments463['id'] = NULL;
$arguments463['default'] = NULL;
$arguments463['arguments'] = NULL;
$arguments463['extensionName'] = NULL;
$arguments463['languageKey'] = NULL;
$arguments463['alternativeLanguageKeys'] = NULL;
$arguments463['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:addKey';
// Rendering Array
$array465 = array();
$array466 = array (
);$array465['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array466);
$arguments463['arguments'] = $array465;

$output461 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext)]);

$output461 .= '
                                        </a>
                                    ';
return $output461;
};
$arguments456 = array();
$arguments456['then'] = NULL;
$arguments456['else'] = NULL;
$arguments456['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array458 = array();
$array459 = array (
);$array458['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array459);

$expression460 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments456['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression460(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array458)
					),
					$renderingContext
				);
$arguments456['__thenClosure'] = $renderChildrenClosure457;

$output455 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output455 .= '
                                ';
return $output455;
};
$arguments453['__elseClosures'][] = function() use ($renderingContext, $self) {
$output467 = '';

$output467 .= '
                                    <a href="';
$array468 = array (
);
$output467 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array468)]);

$output467 .= '" class="btn btn-default">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure470 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments469 = array();
$arguments469['key'] = NULL;
$arguments469['id'] = NULL;
$arguments469['default'] = NULL;
$arguments469['arguments'] = NULL;
$arguments469['extensionName'] = NULL;
$arguments469['languageKey'] = NULL;
$arguments469['alternativeLanguageKeys'] = NULL;
$arguments469['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:removeKey';

$output467 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments469, $renderChildrenClosure470, $renderingContext)]);

$output467 .= '
                                    </a>
                                ';
return $output467;
};

$output452 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);

$output452 .= '
                        </div>
                    </div>
                ';
return $output452;
};
$arguments447 = array();
$arguments447['then'] = NULL;
$arguments447['else'] = NULL;
$arguments447['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array449 = array();
$array450 = array (
);$array449['0'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array450);

$expression451 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments447['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression451(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array449)
					),
					$renderingContext
				);
$arguments447['__thenClosure'] = $renderChildrenClosure448;

$output404 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output404 .= '
            ';
return $output404;
};
$arguments402['__elseClosures'][] = function() use ($renderingContext, $self) {
$output495 = '';

$output495 .= '
                ';
$array496 = array (
);
$output495 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array496)]);

$output495 .= ' = <strong>';
$array497 = array (
);
$output495 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theSetupValue', $array497)]);

$output495 .= '</strong>
            ';
return $output495;
};

$output401 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output401 .= '
        <div class="row mt-3">
            <div class="col-auto">
                <a href="';
$array600 = array (
);
$output401 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrl', $array600)]);

$output401 .= '" class="btn btn-default">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure602 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments601 = array();
$arguments601['identifier'] = NULL;
$arguments601['size'] = 'small';
$arguments601['overlay'] = NULL;
$arguments601['state'] = 'default';
$arguments601['alternativeMarkupIdentifier'] = NULL;
$arguments601['identifier'] = 'actions-chevron-left';

$output401 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments601, $renderChildrenClosure602, $renderingContext);

$output401 .= '&nbsp;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure604 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments603 = array();
$arguments603['key'] = NULL;
$arguments603['id'] = NULL;
$arguments603['default'] = NULL;
$arguments603['arguments'] = NULL;
$arguments603['extensionName'] = NULL;
$arguments603['languageKey'] = NULL;
$arguments603['alternativeLanguageKeys'] = NULL;
$arguments603['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:back';

$output401 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments603, $renderChildrenClosure604, $renderingContext)]);

$output401 .= '
                </a>
            </div>
        </div>
    ';
return $output401;
};
$arguments399 = array();

$output398 .= '';

$output398 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure606 = function() use ($renderingContext, $self) {
$output607 = '';

$output607 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure609 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments608 = array();
$arguments608['pageTitle'] = '';
$arguments608['includeCssFiles'] = NULL;
$arguments608['includeJsFiles'] = NULL;
$arguments608['addJsInlineLabels'] = NULL;
$arguments608['includeRequireJsModules'] = NULL;
$arguments608['addInlineSettings'] = NULL;
// Rendering Array
$array610 = array();
$array610['0'] = 'TYPO3/CMS/Tstemplate/TypoScriptObjectBrowser';
$arguments608['includeRequireJsModules'] = $array610;

$output607 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments608, $renderChildrenClosure609, $renderingContext)]);

$output607 .= '
        <div class="row row-cols-auto align-items-end">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure612 = function() use ($renderingContext, $self) {
$output616 = '';

$output616 .= '
                <div class="col">
                    <label class="form-label">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure618 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments617 = array();
$arguments617['key'] = NULL;
$arguments617['id'] = NULL;
$arguments617['default'] = NULL;
$arguments617['arguments'] = NULL;
$arguments617['extensionName'] = NULL;
$arguments617['languageKey'] = NULL;
$arguments617['alternativeLanguageKeys'] = NULL;
$arguments617['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:browse';

$output616 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments617, $renderChildrenClosure618, $renderingContext)]);

$output616 .= '
                    </label>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure620 = function() use ($renderingContext, $self) {
$array621 = array (
);return $renderingContext->getVariableProvider()->getByPath('browserTypeDropdownMenu', $array621);
};
$arguments619 = array();
$arguments619['value'] = NULL;

$output616 .= isset($arguments619['value']) ? $arguments619['value'] : $renderChildrenClosure620();

$output616 .= '
                </div>
            ';
return $output616;
};
$arguments611 = array();
$arguments611['then'] = NULL;
$arguments611['else'] = NULL;
$arguments611['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array613 = array();
$array614 = array (
);$array613['0'] = $renderingContext->getVariableProvider()->getByPath('hasTsBrowserTypes', $array614);

$expression615 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments611['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression615(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array613)
					),
					$renderingContext
				);
$arguments611['__thenClosure'] = $renderChildrenClosure612;

$output607 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments611, $renderChildrenClosure612, $renderingContext);

$output607 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure623 = function() use ($renderingContext, $self) {
$output627 = '';

$output627 .= '
                <div class="col">
                    <label class="form-label" for="ts_browser_toplevel_';
$array628 = array (
);
$output627 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tsBrowserType', $array628)]);

$output627 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure630 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments629 = array();
$arguments629['key'] = NULL;
$arguments629['id'] = NULL;
$arguments629['default'] = NULL;
$arguments629['arguments'] = NULL;
$arguments629['extensionName'] = NULL;
$arguments629['languageKey'] = NULL;
$arguments629['alternativeLanguageKeys'] = NULL;
$arguments629['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:objectList';

$output627 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments629, $renderChildrenClosure630, $renderingContext)]);

$output627 .= '
                    </label>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure632 = function() use ($renderingContext, $self) {
$array633 = array (
);return $renderingContext->getVariableProvider()->getByPath('objectListDropdownMenu', $array633);
};
$arguments631 = array();
$arguments631['value'] = NULL;

$output627 .= isset($arguments631['value']) ? $arguments631['value'] : $renderChildrenClosure632();

$output627 .= '
                </div>
            ';
return $output627;
};
$arguments622 = array();
$arguments622['then'] = NULL;
$arguments622['else'] = NULL;
$arguments622['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array624 = array();
$array625 = array (
);$array624['0'] = $renderingContext->getVariableProvider()->getByPath('hasTopLevelInObjectList', $array625);

$expression626 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments622['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression626(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array624)
					),
					$renderingContext
				);
$arguments622['__thenClosure'] = $renderChildrenClosure623;

$output607 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments622, $renderChildrenClosure623, $renderingContext);

$output607 .= '
            <div class="col">
                <label class="form-label" for="search_field">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure635 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments634 = array();
$arguments634['key'] = NULL;
$arguments634['id'] = NULL;
$arguments634['default'] = NULL;
$arguments634['arguments'] = NULL;
$arguments634['extensionName'] = NULL;
$arguments634['languageKey'] = NULL;
$arguments634['alternativeLanguageKeys'] = NULL;
$arguments634['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:search';

$output607 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments634, $renderChildrenClosure635, $renderingContext)]);

$output607 .= '
                </label>
                <input class="form-control" type="text" name="search_field" id="search_field" value="';
$array636 = array (
);
$output607 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('postSearchField', $array636)]);

$output607 .= '"/>
            </div>
            <div class="col">
                <div class="form-check form-switch">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure638 = function() use ($renderingContext, $self) {
$array639 = array (
);return $renderingContext->getVariableProvider()->getByPath('regexSearchCheckbox', $array639);
};
$arguments637 = array();
$arguments637['value'] = NULL;

$output607 .= isset($arguments637['value']) ? $arguments637['value'] : $renderChildrenClosure638();

$output607 .= '
                    <label class="form-check-label" for="checkTs_browser_regexsearch">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure641 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments640 = array();
$arguments640['key'] = NULL;
$arguments640['id'] = NULL;
$arguments640['default'] = NULL;
$arguments640['arguments'] = NULL;
$arguments640['extensionName'] = NULL;
$arguments640['languageKey'] = NULL;
$arguments640['alternativeLanguageKeys'] = NULL;
$arguments640['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:regExp';

$output607 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments640, $renderChildrenClosure641, $renderingContext)]);

$output607 .= '
                    </label>
                </div>
            </div>
            <div class="col">
                <input class="btn btn-default" type="submit" name="search" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure643 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments642 = array();
$arguments642['key'] = NULL;
$arguments642['id'] = NULL;
$arguments642['default'] = NULL;
$arguments642['arguments'] = NULL;
$arguments642['extensionName'] = NULL;
$arguments642['languageKey'] = NULL;
$arguments642['alternativeLanguageKeys'] = NULL;
$arguments642['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:search';

$output607 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments642, $renderChildrenClosure643, $renderingContext)]);

$output607 .= '"/>
            </div>
        </div>
        <div class="row row-cols-auto mt-3">
            <div class="col">
                <div class="form-check form-switch">
                    <label class="form-check-label" for="checkTs_browser_showComments">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure645 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments644 = array();
$arguments644['key'] = NULL;
$arguments644['id'] = NULL;
$arguments644['default'] = NULL;
$arguments644['arguments'] = NULL;
$arguments644['extensionName'] = NULL;
$arguments644['languageKey'] = NULL;
$arguments644['alternativeLanguageKeys'] = NULL;
$arguments644['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:displayComments';

$output607 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments644, $renderChildrenClosure645, $renderingContext)]);

$output607 .= '
                    </label>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure647 = function() use ($renderingContext, $self) {
$array648 = array (
);return $renderingContext->getVariableProvider()->getByPath('checkBoxShowComments', $array648);
};
$arguments646 = array();
$arguments646['value'] = NULL;

$output607 .= isset($arguments646['value']) ? $arguments646['value'] : $renderChildrenClosure647();

$output607 .= '
                </div>
                <div class="form-check form-switch">
                    <label class="form-check-label" for="checkTs_browser_alphaSort">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure650 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments649 = array();
$arguments649['key'] = NULL;
$arguments649['id'] = NULL;
$arguments649['default'] = NULL;
$arguments649['arguments'] = NULL;
$arguments649['extensionName'] = NULL;
$arguments649['languageKey'] = NULL;
$arguments649['alternativeLanguageKeys'] = NULL;
$arguments649['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:sortAlphabetically';

$output607 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments649, $renderChildrenClosure650, $renderingContext)]);

$output607 .= '
                    </label>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure652 = function() use ($renderingContext, $self) {
$array653 = array (
);return $renderingContext->getVariableProvider()->getByPath('checkBoxAlphaSort', $array653);
};
$arguments651 = array();
$arguments651['value'] = NULL;

$output607 .= isset($arguments651['value']) ? $arguments651['value'] : $renderChildrenClosure652();

$output607 .= '
                </div>
            </div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure655 = function() use ($renderingContext, $self) {
$output659 = '';

$output659 .= '
                <div class="col">
                    <label class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure661 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments660 = array();
$arguments660['key'] = NULL;
$arguments660['id'] = NULL;
$arguments660['default'] = NULL;
$arguments660['arguments'] = NULL;
$arguments660['extensionName'] = NULL;
$arguments660['languageKey'] = NULL;
$arguments660['alternativeLanguageKeys'] = NULL;
$arguments660['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:displayConstants';

$output659 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments660, $renderChildrenClosure661, $renderingContext)]);

$output659 .= '</label>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure663 = function() use ($renderingContext, $self) {
$array664 = array (
);return $renderingContext->getVariableProvider()->getByPath('dropdownDisplayConstants', $array664);
};
$arguments662 = array();
$arguments662['value'] = NULL;

$output659 .= isset($arguments662['value']) ? $arguments662['value'] : $renderChildrenClosure663();

$output659 .= '
                </div>
            ';
return $output659;
};
$arguments654 = array();
$arguments654['then'] = NULL;
$arguments654['else'] = NULL;
$arguments654['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array656 = array();
$array657 = array (
);$array656['0'] = $renderingContext->getVariableProvider()->getByPath('isSetupAndCropLinesDisabled', $array657);

$expression658 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments654['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression658(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array656)
					),
					$renderingContext
				);
$arguments654['__thenClosure'] = $renderChildrenClosure655;

$output607 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments654, $renderChildrenClosure655, $renderingContext);

$output607 .= '
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure666 = function() use ($renderingContext, $self) {
$output670 = '';

$output670 .= '
            <div class="mt-3 panel panel-default panel-collapse">
                <div class="panel-heading" role="tab" id="heading-tsConditions">
                    <h2 class="panel-title">
                        <a role="button" data-bs-toggle="collapse" href="#collapse-tsConditions" aria-expanded="false" aria-controls="collapse-tsConditions" class="collapsed">
                            <span class="caret"></span>
                            <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure672 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments671 = array();
$arguments671['key'] = NULL;
$arguments671['id'] = NULL;
$arguments671['default'] = NULL;
$arguments671['arguments'] = NULL;
$arguments671['extensionName'] = NULL;
$arguments671['languageKey'] = NULL;
$arguments671['alternativeLanguageKeys'] = NULL;
$arguments671['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:conditions';

$output670 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments671, $renderChildrenClosure672, $renderingContext)]);

$output670 .= '</strong>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure674 = function() use ($renderingContext, $self) {
$output678 = '';

$output678 .= '
                                <span class="badge badge-warning">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure680 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments679 = array();
$arguments679['key'] = NULL;
$arguments679['id'] = NULL;
$arguments679['default'] = NULL;
$arguments679['arguments'] = NULL;
$arguments679['extensionName'] = NULL;
$arguments679['languageKey'] = NULL;
$arguments679['alternativeLanguageKeys'] = NULL;
$arguments679['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:activeConditions';
// Rendering Array
$array681 = array();
$array682 = array (
);$array681['0'] = $renderingContext->getVariableProvider()->getByPath('activeConditions', $array682);
$arguments679['arguments'] = $array681;

$output678 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments679, $renderChildrenClosure680, $renderingContext)]);

$output678 .= '
                                </span>
                            ';
return $output678;
};
$arguments673 = array();
$arguments673['then'] = NULL;
$arguments673['else'] = NULL;
$arguments673['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array675 = array();
$array676 = array (
);$array675['0'] = $renderingContext->getVariableProvider()->getByPath('activeConditions', $array676);

$expression677 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments673['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression677(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array675)
					),
					$renderingContext
				);
$arguments673['__thenClosure'] = $renderChildrenClosure674;

$output670 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments673, $renderChildrenClosure674, $renderingContext);

$output670 .= '
                        </a>
                    </h2>
                </div>
                <div class="collapse" id="collapse-tsConditions" role="tabpanel" aria-labelledby="heading-tsConditions">
                    <div class="panel-body">
                        <div class="row mb-3">
                            <div class="col-auto">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure684 = function() use ($renderingContext, $self) {
$output686 = '';

$output686 .= '
                                    <div class="form-check form-switch">
                                        <label class="form-check-label" for="check';
$array687 = array (
);
$output686 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('condition.key', $array687)]);

$output686 .= '">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure689 = function() use ($renderingContext, $self) {
$array690 = array (
);return $renderingContext->getVariableProvider()->getByPath('condition.label', $array690);
};
$arguments688 = array();
$arguments688['value'] = NULL;

$output686 .= isset($arguments688['value']) ? $arguments688['value'] : $renderChildrenClosure689();

$output686 .= '
                                        </label>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure692 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments691 = array();
$arguments691['additionalAttributes'] = NULL;
$arguments691['data'] = NULL;
$arguments691['aria'] = NULL;
$arguments691['name'] = NULL;
$arguments691['value'] = NULL;
$arguments691['property'] = NULL;
$arguments691['disabled'] = NULL;
$arguments691['errorClass'] = 'f3-form-error';
$arguments691['class'] = NULL;
$arguments691['dir'] = NULL;
$arguments691['id'] = NULL;
$arguments691['lang'] = NULL;
$arguments691['style'] = NULL;
$arguments691['title'] = NULL;
$arguments691['accesskey'] = NULL;
$arguments691['tabindex'] = NULL;
$arguments691['onclick'] = NULL;
$arguments691['checked'] = NULL;
$arguments691['multiple'] = false;
$arguments691['class'] = 'form-check-input';
$output693 = '';

$output693 .= 'conditions[';
$array694 = array (
);
$output693 .= $renderingContext->getVariableProvider()->getByPath('condition.key', $array694);

$output693 .= ']';
$arguments691['name'] = $output693;
$output695 = '';

$output695 .= 'check';
$array696 = array (
);
$output695 .= $renderingContext->getVariableProvider()->getByPath('condition.key', $array696);
$arguments691['id'] = $output695;
$array697 = array (
);$arguments691['value'] = $renderingContext->getVariableProvider()->getByPath('condition.value', $array697);
// Rendering Boolean node
// Rendering Array
$array698 = array();
$array699 = array (
);$array698['0'] = $renderingContext->getVariableProvider()->getByPath('condition.isSet', $array699);

$expression700 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments691['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression700(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array698)
					),
					$renderingContext
				);

$output686 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments691, $renderChildrenClosure692, $renderingContext);

$output686 .= '
                                    </div>
                                ';
return $output686;
};
$arguments683 = array();
$arguments683['each'] = NULL;
$arguments683['as'] = NULL;
$arguments683['key'] = NULL;
$arguments683['reverse'] = false;
$arguments683['iteration'] = NULL;
$array685 = array (
);$arguments683['each'] = $renderingContext->getVariableProvider()->getByPath('tsConditions', $array685);
$arguments683['as'] = 'condition';

$output670 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments683, $renderChildrenClosure684, $renderingContext);

$output670 .= '
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure702 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments701 = array();
$arguments701['additionalAttributes'] = NULL;
$arguments701['data'] = NULL;
$arguments701['aria'] = NULL;
$arguments701['name'] = NULL;
$arguments701['value'] = NULL;
$arguments701['property'] = NULL;
$arguments701['disabled'] = NULL;
$arguments701['class'] = NULL;
$arguments701['dir'] = NULL;
$arguments701['id'] = NULL;
$arguments701['lang'] = NULL;
$arguments701['style'] = NULL;
$arguments701['title'] = NULL;
$arguments701['accesskey'] = NULL;
$arguments701['tabindex'] = NULL;
$arguments701['onclick'] = NULL;
$arguments701['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure704 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments703 = array();
$arguments703['key'] = NULL;
$arguments703['id'] = NULL;
$arguments703['default'] = NULL;
$arguments703['arguments'] = NULL;
$arguments703['extensionName'] = NULL;
$arguments703['languageKey'] = NULL;
$arguments703['alternativeLanguageKeys'] = NULL;
$arguments703['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:setConditions';
$arguments701['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments703, $renderChildrenClosure704, $renderingContext);
$arguments701['name'] = 'Submit';

$output670 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments701, $renderChildrenClosure702, $renderingContext);

$output670 .= '
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ';
return $output670;
};
$arguments665 = array();
$arguments665['then'] = NULL;
$arguments665['else'] = NULL;
$arguments665['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array667 = array();
$array668 = array (
);$array667['0'] = $renderingContext->getVariableProvider()->getByPath('hasConditions', $array668);

$expression669 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments665['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression669(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array667)
					),
					$renderingContext
				);
$arguments665['__thenClosure'] = $renderChildrenClosure666;

$output607 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments665, $renderChildrenClosure666, $renderingContext);

$output607 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure706 = function() use ($renderingContext, $self) {
$output710 = '';

$output710 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure712 = function() use ($renderingContext, $self) {
$output715 = '';

$output715 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure717 = function() use ($renderingContext, $self) {
$output719 = '';

$output719 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure721 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments720 = array();
$arguments720['key'] = NULL;
$arguments720['id'] = NULL;
$arguments720['default'] = NULL;
$arguments720['arguments'] = NULL;
$arguments720['extensionName'] = NULL;
$arguments720['languageKey'] = NULL;
$arguments720['alternativeLanguageKeys'] = NULL;
$output722 = '';

$output722 .= 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:severity.';
$array723 = array (
);
$output722 .= $renderingContext->getVariableProvider()->getByPath('parseError.1', $array723);
$arguments720['key'] = $output722;

$output719 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments720, $renderChildrenClosure721, $renderingContext)]);

$output719 .= '
                    : ';
$array724 = array (
);
$output719 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('parseError.0', $array724)]);

$output719 .= '
                    <a href="';
$array725 = array (
);
$output719 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('showErrorDetailsUri', $array725)]);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string726 = '{parseError.2 + parseError.3}';
$array727 = array (
  0 => '{parseError.2 + parseError.3}',
  1 => '{parseError.2 + parseError.3}',
);

$output719 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string726, $array727)]);

$output719 .= '"  class="text-warning">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure729 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments728 = array();
$arguments728['key'] = NULL;
$arguments728['id'] = NULL;
$arguments728['default'] = NULL;
$arguments728['arguments'] = NULL;
$arguments728['extensionName'] = NULL;
$arguments728['languageKey'] = NULL;
$arguments728['alternativeLanguageKeys'] = NULL;
$arguments728['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:errorShowDetails';

$output719 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments728, $renderChildrenClosure729, $renderingContext)]);

$output719 .= '
                    </a>
                    <br/>
                ';
return $output719;
};
$arguments716 = array();
$arguments716['each'] = NULL;
$arguments716['as'] = NULL;
$arguments716['key'] = NULL;
$arguments716['reverse'] = false;
$arguments716['iteration'] = NULL;
$array718 = array (
);$arguments716['each'] = $renderingContext->getVariableProvider()->getByPath('parseErrors', $array718);
$arguments716['as'] = 'parseError';

$output715 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments716, $renderChildrenClosure717, $renderingContext);

$output715 .= '
            ';
return $output715;
};
$arguments711 = array();
$arguments711['message'] = NULL;
$arguments711['title'] = NULL;
$arguments711['state'] = -2;
$arguments711['iconName'] = NULL;
$arguments711['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure714 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments713 = array();
$arguments713['key'] = NULL;
$arguments713['id'] = NULL;
$arguments713['default'] = NULL;
$arguments713['arguments'] = NULL;
$arguments713['extensionName'] = NULL;
$arguments713['languageKey'] = NULL;
$arguments713['alternativeLanguageKeys'] = NULL;
$arguments713['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:errorsWarnings';
$arguments711['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments713, $renderChildrenClosure714, $renderingContext);
$arguments711['state'] = 1;
$renderChildrenClosure712 = ($arguments711['message'] !== null) ? function() use ($arguments711) { return $arguments711['message']; } : $renderChildrenClosure712;
$output710 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments711, $renderChildrenClosure712, $renderingContext);

$output710 .= '
        ';
return $output710;
};
$arguments705 = array();
$arguments705['then'] = NULL;
$arguments705['else'] = NULL;
$arguments705['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array707 = array();
$array708 = array (
);$array707['0'] = $renderingContext->getVariableProvider()->getByPath('hasParseErrors', $array708);

$expression709 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments705['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression709(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array707)
					),
					$renderingContext
				);
$arguments705['__thenClosure'] = $renderChildrenClosure706;

$output607 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments705, $renderChildrenClosure706, $renderingContext);

$output607 .= '
        <div class="mt-3 panel panel-default">
            <div class="panel-heading">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure731 = function() use ($renderingContext, $self) {
$output745 = '';

$output745 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure747 = function() use ($renderingContext, $self) {
$output748 = '';

$output748 .= '
                        <strong>';
$array749 = array (
);
$output748 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('treeLabel', $array749)]);

$output748 .= '</strong>
                    ';
return $output748;
};
$arguments746 = array();

$output745 .= '';

$output745 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure751 = function() use ($renderingContext, $self) {
$output752 = '';

$output752 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure754 = function() use ($renderingContext, $self) {
$output755 = '';

$output755 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure757 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments756 = array();
$arguments756['key'] = NULL;
$arguments756['id'] = NULL;
$arguments756['default'] = NULL;
$arguments756['arguments'] = NULL;
$arguments756['extensionName'] = NULL;
$arguments756['languageKey'] = NULL;
$arguments756['alternativeLanguageKeys'] = NULL;
$output758 = '';

$output758 .= 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:';
$array759 = array (
);
$output758 .= $renderingContext->getVariableProvider()->getByPath('rootLLKey', $array759);
$arguments756['key'] = $output758;

$output755 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments756, $renderChildrenClosure757, $renderingContext);

$output755 .= '
                        ';
return $output755;
};
$arguments753 = array();
$arguments753['value'] = NULL;
$arguments753['mode'] = 'upper';
$arguments753['mode'] = 'upper';

$output752 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments753, $renderChildrenClosure754, $renderingContext)]);

$output752 .= '
                    ';
return $output752;
};
$arguments750 = array();
$arguments750['if'] = NULL;

$output745 .= '';

$output745 .= '
                ';
return $output745;
};
$arguments730 = array();
$arguments730['then'] = NULL;
$arguments730['else'] = NULL;
$arguments730['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array742 = array();
$array743 = array (
);$array742['0'] = $renderingContext->getVariableProvider()->getByPath('hasKeySelected', $array743);

$expression744 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments730['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression744(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array742)
					),
					$renderingContext
				);
$arguments730['__thenClosure'] = function() use ($renderingContext, $self) {
$output732 = '';

$output732 .= '
                        <strong>';
$array733 = array (
);
$output732 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('treeLabel', $array733)]);

$output732 .= '</strong>
                    ';
return $output732;
};
$arguments730['__elseClosures'][] = function() use ($renderingContext, $self) {
$output734 = '';

$output734 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure736 = function() use ($renderingContext, $self) {
$output737 = '';

$output737 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure739 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments738 = array();
$arguments738['key'] = NULL;
$arguments738['id'] = NULL;
$arguments738['default'] = NULL;
$arguments738['arguments'] = NULL;
$arguments738['extensionName'] = NULL;
$arguments738['languageKey'] = NULL;
$arguments738['alternativeLanguageKeys'] = NULL;
$output740 = '';

$output740 .= 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:';
$array741 = array (
);
$output740 .= $renderingContext->getVariableProvider()->getByPath('rootLLKey', $array741);
$arguments738['key'] = $output740;

$output737 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments738, $renderChildrenClosure739, $renderingContext);

$output737 .= '
                        ';
return $output737;
};
$arguments735 = array();
$arguments735['value'] = NULL;
$arguments735['mode'] = 'upper';
$arguments735['mode'] = 'upper';

$output734 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments735, $renderChildrenClosure736, $renderingContext)]);

$output734 .= '
                    ';
return $output734;
};

$output607 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments730, $renderChildrenClosure731, $renderingContext);

$output607 .= '
                <strong>';
$array760 = array (
);
$output607 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedKey', $array760)]);

$output607 .= '</strong>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure762 = function() use ($renderingContext, $self) {
$output766 = '';

$output766 .= '
                    <a href="';
$array767 = array (
);
$output766 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrlRemoveFromObjectList', $array767)]);

$output766 .= '" class="btn btn-default">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure769 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments768 = array();
$arguments768['key'] = NULL;
$arguments768['id'] = NULL;
$arguments768['default'] = NULL;
$arguments768['arguments'] = NULL;
$arguments768['extensionName'] = NULL;
$arguments768['languageKey'] = NULL;
$arguments768['alternativeLanguageKeys'] = NULL;
$arguments768['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:removeKey';

$output766 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments768, $renderChildrenClosure769, $renderingContext)]);

$output766 .= '
                    </a>
                ';
return $output766;
};
$arguments761 = array();
$arguments761['then'] = NULL;
$arguments761['else'] = NULL;
$arguments761['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array763 = array();
$array764 = array (
);$array763['0'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlRemoveFromObjectList', $array764);

$expression765 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments761['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression765(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array763)
					),
					$renderingContext
				);
$arguments761['__thenClosure'] = $renderChildrenClosure762;

$output607 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments761, $renderChildrenClosure762, $renderingContext);

$output607 .= '
            </div>
            <div class="panel-body tstemplate-tsobjectbrowser-content">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure771 = function() use ($renderingContext, $self) {
$array772 = array (
);return $renderingContext->getVariableProvider()->getByPath('tsTree', $array772);
};
$arguments770 = array();
$arguments770['value'] = NULL;

$output607 .= isset($arguments770['value']) ? $arguments770['value'] : $renderChildrenClosure771();

$output607 .= '</div>
        </div>
    ';
return $output607;
};
$arguments605 = array();
$arguments605['if'] = NULL;

$output398 .= '';

$output398 .= '
';
return $output398;
};
$arguments23 = array();
$arguments23['then'] = NULL;
$arguments23['else'] = NULL;
$arguments23['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array395 = array();
$array396 = array (
);$array395['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array396);

$expression397 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments23['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression397(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array395)
					),
					$renderingContext
				);
$arguments23['__thenClosure'] = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['key'] = NULL;
$arguments129['id'] = NULL;
$arguments129['default'] = NULL;
$arguments129['arguments'] = NULL;
$arguments129['extensionName'] = NULL;
$arguments129['languageKey'] = NULL;
$arguments129['alternativeLanguageKeys'] = NULL;
$arguments129['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:editProperty';

$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext)]);

$output128 .= '</h3>
                <div class="row row-cols-auto align-items-end g-1">
                    <div class="col">
                        <label class="form-label">';
$array131 = array (
);
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array131)]);

$output128 .= ' =</label>
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['additionalAttributes'] = NULL;
$arguments132['data'] = NULL;
$arguments132['aria'] = NULL;
$arguments132['name'] = NULL;
$arguments132['value'] = NULL;
$arguments132['property'] = NULL;
$arguments132['autofocus'] = NULL;
$arguments132['disabled'] = NULL;
$arguments132['maxlength'] = NULL;
$arguments132['readonly'] = NULL;
$arguments132['size'] = NULL;
$arguments132['placeholder'] = NULL;
$arguments132['pattern'] = NULL;
$arguments132['errorClass'] = 'f3-form-error';
$arguments132['class'] = NULL;
$arguments132['dir'] = NULL;
$arguments132['id'] = NULL;
$arguments132['lang'] = NULL;
$arguments132['style'] = NULL;
$arguments132['title'] = NULL;
$arguments132['accesskey'] = NULL;
$arguments132['tabindex'] = NULL;
$arguments132['onclick'] = NULL;
$arguments132['required'] = false;
$arguments132['type'] = 'text';
$arguments132['class'] = 'form-control';
$output134 = '';

$output134 .= 'data[';
$array135 = array (
);
$output134 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array135);

$output134 .= '][value]';
$arguments132['name'] = $output134;
$array136 = array (
);$arguments132['value'] = $renderingContext->getVariableProvider()->getByPath('theSetupValue', $array136);

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output128 .= '
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['additionalAttributes'] = NULL;
$arguments137['data'] = NULL;
$arguments137['aria'] = NULL;
$arguments137['name'] = NULL;
$arguments137['value'] = NULL;
$arguments137['property'] = NULL;
$arguments137['disabled'] = NULL;
$arguments137['class'] = NULL;
$arguments137['dir'] = NULL;
$arguments137['id'] = NULL;
$arguments137['lang'] = NULL;
$arguments137['style'] = NULL;
$arguments137['title'] = NULL;
$arguments137['accesskey'] = NULL;
$arguments137['tabindex'] = NULL;
$arguments137['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['key'] = NULL;
$arguments139['id'] = NULL;
$arguments139['default'] = NULL;
$arguments139['arguments'] = NULL;
$arguments139['extensionName'] = NULL;
$arguments139['languageKey'] = NULL;
$arguments139['alternativeLanguageKeys'] = NULL;
$arguments139['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:updateButton';
$arguments137['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);
$arguments137['class'] = 'btn btn-default';
$arguments137['name'] = 'update_value';

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output128 .= '
                    </div>
                </div>

                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['key'] = NULL;
$arguments141['id'] = NULL;
$arguments141['default'] = NULL;
$arguments141['arguments'] = NULL;
$arguments141['extensionName'] = NULL;
$arguments141['languageKey'] = NULL;
$arguments141['alternativeLanguageKeys'] = NULL;
$arguments141['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:addProperty';

$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext)]);

$output128 .= '</h3>
                <div class="row row-cols-auto align-items-end g-1">
                    <div class="col">
                        <label class="visually-hidden">';
$array143 = array (
);
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array143)]);

$output128 .= '.</label>
                        <div class="input-group">
                            <div class="input-group-addon">';
$array144 = array (
);
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array144)]);

$output128 .= '.</div>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['additionalAttributes'] = NULL;
$arguments145['data'] = NULL;
$arguments145['aria'] = NULL;
$arguments145['name'] = NULL;
$arguments145['value'] = NULL;
$arguments145['property'] = NULL;
$arguments145['autofocus'] = NULL;
$arguments145['disabled'] = NULL;
$arguments145['maxlength'] = NULL;
$arguments145['readonly'] = NULL;
$arguments145['size'] = NULL;
$arguments145['placeholder'] = NULL;
$arguments145['pattern'] = NULL;
$arguments145['errorClass'] = 'f3-form-error';
$arguments145['class'] = NULL;
$arguments145['dir'] = NULL;
$arguments145['id'] = NULL;
$arguments145['lang'] = NULL;
$arguments145['style'] = NULL;
$arguments145['title'] = NULL;
$arguments145['accesskey'] = NULL;
$arguments145['tabindex'] = NULL;
$arguments145['onclick'] = NULL;
$arguments145['required'] = false;
$arguments145['type'] = 'text';
$arguments145['class'] = 'form-control';
$output147 = '';

$output147 .= 'data[';
$array148 = array (
);
$output147 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array148);

$output147 .= '][name]';
$arguments145['name'] = $output147;

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output128 .= '
                        </div>
                    </div>
                    <div class="col">
                        <label>=</label>
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['additionalAttributes'] = NULL;
$arguments149['data'] = NULL;
$arguments149['aria'] = NULL;
$arguments149['name'] = NULL;
$arguments149['value'] = NULL;
$arguments149['property'] = NULL;
$arguments149['autofocus'] = NULL;
$arguments149['disabled'] = NULL;
$arguments149['maxlength'] = NULL;
$arguments149['readonly'] = NULL;
$arguments149['size'] = NULL;
$arguments149['placeholder'] = NULL;
$arguments149['pattern'] = NULL;
$arguments149['errorClass'] = 'f3-form-error';
$arguments149['class'] = NULL;
$arguments149['dir'] = NULL;
$arguments149['id'] = NULL;
$arguments149['lang'] = NULL;
$arguments149['style'] = NULL;
$arguments149['title'] = NULL;
$arguments149['accesskey'] = NULL;
$arguments149['tabindex'] = NULL;
$arguments149['onclick'] = NULL;
$arguments149['required'] = false;
$arguments149['type'] = 'text';
$arguments149['class'] = 'form-control';
$output151 = '';

$output151 .= 'data[';
$array152 = array (
);
$output151 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array152);

$output151 .= '][propertyValue]';
$arguments149['name'] = $output151;

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output128 .= '
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['additionalAttributes'] = NULL;
$arguments153['data'] = NULL;
$arguments153['aria'] = NULL;
$arguments153['name'] = NULL;
$arguments153['value'] = NULL;
$arguments153['property'] = NULL;
$arguments153['disabled'] = NULL;
$arguments153['class'] = NULL;
$arguments153['dir'] = NULL;
$arguments153['id'] = NULL;
$arguments153['lang'] = NULL;
$arguments153['style'] = NULL;
$arguments153['title'] = NULL;
$arguments153['accesskey'] = NULL;
$arguments153['tabindex'] = NULL;
$arguments153['onclick'] = NULL;
$arguments153['class'] = 'btn btn-default';
$arguments153['name'] = 'add_property';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['key'] = NULL;
$arguments155['id'] = NULL;
$arguments155['default'] = NULL;
$arguments155['arguments'] = NULL;
$arguments155['extensionName'] = NULL;
$arguments155['languageKey'] = NULL;
$arguments155['alternativeLanguageKeys'] = NULL;
$arguments155['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:addButton';
$arguments153['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output128 .= '
                    </div>
                </div>

                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['key'] = NULL;
$arguments157['id'] = NULL;
$arguments157['default'] = NULL;
$arguments157['arguments'] = NULL;
$arguments157['extensionName'] = NULL;
$arguments157['languageKey'] = NULL;
$arguments157['alternativeLanguageKeys'] = NULL;
$arguments157['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:clearObject';

$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext)]);

$output128 .= '</h3>

                <div class="row row-cols-auto align-items-end g-3">
                    <div class="col">
                        <div class="form-check">
                            <label class="form-check-label" for="clearValue-';
$array159 = array (
);
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array159)]);

$output128 .= '">
                                ';
$array160 = array (
);
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array160)]);

$output128 .= '
                            </label>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['additionalAttributes'] = NULL;
$arguments161['data'] = NULL;
$arguments161['aria'] = NULL;
$arguments161['name'] = NULL;
$arguments161['value'] = NULL;
$arguments161['property'] = NULL;
$arguments161['disabled'] = NULL;
$arguments161['errorClass'] = 'f3-form-error';
$arguments161['class'] = NULL;
$arguments161['dir'] = NULL;
$arguments161['id'] = NULL;
$arguments161['lang'] = NULL;
$arguments161['style'] = NULL;
$arguments161['title'] = NULL;
$arguments161['accesskey'] = NULL;
$arguments161['tabindex'] = NULL;
$arguments161['onclick'] = NULL;
$arguments161['checked'] = NULL;
$arguments161['multiple'] = false;
$arguments161['class'] = 'form-check-input';
$output163 = '';

$output163 .= 'data[';
$array164 = array (
);
$output163 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array164);

$output163 .= '][clearValue]';
$arguments161['name'] = $output163;
$output165 = '';

$output165 .= 'clearValue-';
$array166 = array (
);
$output165 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array166);
$arguments161['id'] = $output165;
$arguments161['value'] = 1;

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output128 .= '
                        </div>
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['additionalAttributes'] = NULL;
$arguments167['data'] = NULL;
$arguments167['aria'] = NULL;
$arguments167['name'] = NULL;
$arguments167['value'] = NULL;
$arguments167['property'] = NULL;
$arguments167['disabled'] = NULL;
$arguments167['class'] = NULL;
$arguments167['dir'] = NULL;
$arguments167['id'] = NULL;
$arguments167['lang'] = NULL;
$arguments167['style'] = NULL;
$arguments167['title'] = NULL;
$arguments167['accesskey'] = NULL;
$arguments167['tabindex'] = NULL;
$arguments167['onclick'] = NULL;
$arguments167['class'] = 'btn btn-default';
$arguments167['name'] = 'clear_object';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments169 = array();
$arguments169['key'] = NULL;
$arguments169['id'] = NULL;
$arguments169['default'] = NULL;
$arguments169['arguments'] = NULL;
$arguments169['extensionName'] = NULL;
$arguments169['languageKey'] = NULL;
$arguments169['alternativeLanguageKeys'] = NULL;
$arguments169['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:clearButton';
$arguments167['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output128 .= '
                    </div>
                </div>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
                    <div class="row mt-3">
                        <div class="col-auto">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$output201 = '';

$output201 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
                                        <a href="';
$array208 = array (
);
$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array208)]);

$output207 .= '" class="btn btn-default">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments209 = array();
$arguments209['key'] = NULL;
$arguments209['id'] = NULL;
$arguments209['default'] = NULL;
$arguments209['arguments'] = NULL;
$arguments209['extensionName'] = NULL;
$arguments209['languageKey'] = NULL;
$arguments209['alternativeLanguageKeys'] = NULL;
$arguments209['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:addKey';
// Rendering Array
$array211 = array();
$array212 = array (
);$array211['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array212);
$arguments209['arguments'] = $array211;

$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext)]);

$output207 .= '
                                        </a>
                                    ';
return $output207;
};
$arguments202 = array();
$arguments202['then'] = NULL;
$arguments202['else'] = NULL;
$arguments202['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array204 = array();
$array205 = array (
);$array204['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array205);

$expression206 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments202['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression206(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array204)
					),
					$renderingContext
				);
$arguments202['__thenClosure'] = $renderChildrenClosure203;

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output201 .= '
                                ';
return $output201;
};
$arguments199 = array();

$output198 .= '';

$output198 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
                                    <a href="';
$array216 = array (
);
$output215 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array216)]);

$output215 .= '" class="btn btn-default">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['key'] = NULL;
$arguments217['id'] = NULL;
$arguments217['default'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['extensionName'] = NULL;
$arguments217['languageKey'] = NULL;
$arguments217['alternativeLanguageKeys'] = NULL;
$arguments217['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:removeKey';

$output215 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext)]);

$output215 .= '
                                    </a>
                                ';
return $output215;
};
$arguments213 = array();
$arguments213['if'] = NULL;

$output198 .= '';

$output198 .= '
                            ';
return $output198;
};
$arguments177 = array();
$arguments177['then'] = NULL;
$arguments177['else'] = NULL;
$arguments177['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array195 = array();
$array196 = array (
);$array195['0'] = $renderingContext->getVariableProvider()->getByPath('isNotInTopLevelKeyList', $array196);

$expression197 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments177['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression197(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array195)
					),
					$renderingContext
				);
$arguments177['__thenClosure'] = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
                                        <a href="';
$array186 = array (
);
$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array186)]);

$output185 .= '" class="btn btn-default">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['key'] = NULL;
$arguments187['id'] = NULL;
$arguments187['default'] = NULL;
$arguments187['arguments'] = NULL;
$arguments187['extensionName'] = NULL;
$arguments187['languageKey'] = NULL;
$arguments187['alternativeLanguageKeys'] = NULL;
$arguments187['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:addKey';
// Rendering Array
$array189 = array();
$array190 = array (
);$array189['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array190);
$arguments187['arguments'] = $array189;

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext)]);

$output185 .= '
                                        </a>
                                    ';
return $output185;
};
$arguments180 = array();
$arguments180['then'] = NULL;
$arguments180['else'] = NULL;
$arguments180['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array182 = array();
$array183 = array (
);$array182['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array183);

$expression184 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments180['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression184(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array182)
					),
					$renderingContext
				);
$arguments180['__thenClosure'] = $renderChildrenClosure181;

$output179 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
                                ';
return $output179;
};
$arguments177['__elseClosures'][] = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
                                    <a href="';
$array192 = array (
);
$output191 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array192)]);

$output191 .= '" class="btn btn-default">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['key'] = NULL;
$arguments193['id'] = NULL;
$arguments193['default'] = NULL;
$arguments193['arguments'] = NULL;
$arguments193['extensionName'] = NULL;
$arguments193['languageKey'] = NULL;
$arguments193['alternativeLanguageKeys'] = NULL;
$arguments193['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:removeKey';

$output191 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext)]);

$output191 .= '
                                    </a>
                                ';
return $output191;
};

$output176 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output176 .= '
                        </div>
                    </div>
                ';
return $output176;
};
$arguments171 = array();
$arguments171['then'] = NULL;
$arguments171['else'] = NULL;
$arguments171['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array173 = array();
$array174 = array (
);$array173['0'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array174);

$expression175 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments171['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression175(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array173)
					),
					$renderingContext
				);
$arguments171['__thenClosure'] = $renderChildrenClosure172;

$output128 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output128 .= '
            ';
return $output128;
};
$arguments126 = array();

$output125 .= '';

$output125 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
$output221 = '';

$output221 .= '
                ';
$array222 = array (
);
$output221 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array222)]);

$output221 .= ' = <strong>';
$array223 = array (
);
$output221 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theSetupValue', $array223)]);

$output221 .= '</strong>
            ';
return $output221;
};
$arguments219 = array();
$arguments219['if'] = NULL;

$output125 .= '';

$output125 .= '
        ';
return $output125;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array122 = array();
$array123 = array (
);$array122['0'] = $renderingContext->getVariableProvider()->getByPath('existTemplate', $array123);

$expression124 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression124(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array122)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['key'] = NULL;
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['languageKey'] = NULL;
$arguments29['alternativeLanguageKeys'] = NULL;
$arguments29['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:editProperty';

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output28 .= '</h3>
                <div class="row row-cols-auto align-items-end g-1">
                    <div class="col">
                        <label class="form-label">';
$array31 = array (
);
$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array31)]);

$output28 .= ' =</label>
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['aria'] = NULL;
$arguments32['name'] = NULL;
$arguments32['value'] = NULL;
$arguments32['property'] = NULL;
$arguments32['autofocus'] = NULL;
$arguments32['disabled'] = NULL;
$arguments32['maxlength'] = NULL;
$arguments32['readonly'] = NULL;
$arguments32['size'] = NULL;
$arguments32['placeholder'] = NULL;
$arguments32['pattern'] = NULL;
$arguments32['errorClass'] = 'f3-form-error';
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['required'] = false;
$arguments32['type'] = 'text';
$arguments32['class'] = 'form-control';
$output34 = '';

$output34 .= 'data[';
$array35 = array (
);
$output34 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array35);

$output34 .= '][value]';
$arguments32['name'] = $output34;
$array36 = array (
);$arguments32['value'] = $renderingContext->getVariableProvider()->getByPath('theSetupValue', $array36);

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output28 .= '
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['aria'] = NULL;
$arguments37['name'] = NULL;
$arguments37['value'] = NULL;
$arguments37['property'] = NULL;
$arguments37['disabled'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['key'] = NULL;
$arguments39['id'] = NULL;
$arguments39['default'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
$arguments39['languageKey'] = NULL;
$arguments39['alternativeLanguageKeys'] = NULL;
$arguments39['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:updateButton';
$arguments37['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);
$arguments37['class'] = 'btn btn-default';
$arguments37['name'] = 'update_value';

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output28 .= '
                    </div>
                </div>

                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['key'] = NULL;
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$arguments41['languageKey'] = NULL;
$arguments41['alternativeLanguageKeys'] = NULL;
$arguments41['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:addProperty';

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output28 .= '</h3>
                <div class="row row-cols-auto align-items-end g-1">
                    <div class="col">
                        <label class="visually-hidden">';
$array43 = array (
);
$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array43)]);

$output28 .= '.</label>
                        <div class="input-group">
                            <div class="input-group-addon">';
$array44 = array (
);
$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array44)]);

$output28 .= '.</div>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['aria'] = NULL;
$arguments45['name'] = NULL;
$arguments45['value'] = NULL;
$arguments45['property'] = NULL;
$arguments45['autofocus'] = NULL;
$arguments45['disabled'] = NULL;
$arguments45['maxlength'] = NULL;
$arguments45['readonly'] = NULL;
$arguments45['size'] = NULL;
$arguments45['placeholder'] = NULL;
$arguments45['pattern'] = NULL;
$arguments45['errorClass'] = 'f3-form-error';
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['required'] = false;
$arguments45['type'] = 'text';
$arguments45['class'] = 'form-control';
$output47 = '';

$output47 .= 'data[';
$array48 = array (
);
$output47 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array48);

$output47 .= '][name]';
$arguments45['name'] = $output47;

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output28 .= '
                        </div>
                    </div>
                    <div class="col">
                        <label>=</label>
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['aria'] = NULL;
$arguments49['name'] = NULL;
$arguments49['value'] = NULL;
$arguments49['property'] = NULL;
$arguments49['autofocus'] = NULL;
$arguments49['disabled'] = NULL;
$arguments49['maxlength'] = NULL;
$arguments49['readonly'] = NULL;
$arguments49['size'] = NULL;
$arguments49['placeholder'] = NULL;
$arguments49['pattern'] = NULL;
$arguments49['errorClass'] = 'f3-form-error';
$arguments49['class'] = NULL;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['title'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['required'] = false;
$arguments49['type'] = 'text';
$arguments49['class'] = 'form-control';
$output51 = '';

$output51 .= 'data[';
$array52 = array (
);
$output51 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array52);

$output51 .= '][propertyValue]';
$arguments49['name'] = $output51;

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output28 .= '
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['aria'] = NULL;
$arguments53['name'] = NULL;
$arguments53['value'] = NULL;
$arguments53['property'] = NULL;
$arguments53['disabled'] = NULL;
$arguments53['class'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$arguments53['class'] = 'btn btn-default';
$arguments53['name'] = 'add_property';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['key'] = NULL;
$arguments55['id'] = NULL;
$arguments55['default'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['extensionName'] = NULL;
$arguments55['languageKey'] = NULL;
$arguments55['alternativeLanguageKeys'] = NULL;
$arguments55['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:addButton';
$arguments53['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output28 .= '
                    </div>
                </div>

                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['key'] = NULL;
$arguments57['id'] = NULL;
$arguments57['default'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['extensionName'] = NULL;
$arguments57['languageKey'] = NULL;
$arguments57['alternativeLanguageKeys'] = NULL;
$arguments57['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:clearObject';

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output28 .= '</h3>

                <div class="row row-cols-auto align-items-end g-3">
                    <div class="col">
                        <div class="form-check">
                            <label class="form-check-label" for="clearValue-';
$array59 = array (
);
$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array59)]);

$output28 .= '">
                                ';
$array60 = array (
);
$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array60)]);

$output28 .= '
                            </label>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['additionalAttributes'] = NULL;
$arguments61['data'] = NULL;
$arguments61['aria'] = NULL;
$arguments61['name'] = NULL;
$arguments61['value'] = NULL;
$arguments61['property'] = NULL;
$arguments61['disabled'] = NULL;
$arguments61['errorClass'] = 'f3-form-error';
$arguments61['class'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$arguments61['checked'] = NULL;
$arguments61['multiple'] = false;
$arguments61['class'] = 'form-check-input';
$output63 = '';

$output63 .= 'data[';
$array64 = array (
);
$output63 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array64);

$output63 .= '][clearValue]';
$arguments61['name'] = $output63;
$output65 = '';

$output65 .= 'clearValue-';
$array66 = array (
);
$output65 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array66);
$arguments61['id'] = $output65;
$arguments61['value'] = 1;

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output28 .= '
                        </div>
                    </div>
                    <div class="col">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['additionalAttributes'] = NULL;
$arguments67['data'] = NULL;
$arguments67['aria'] = NULL;
$arguments67['name'] = NULL;
$arguments67['value'] = NULL;
$arguments67['property'] = NULL;
$arguments67['disabled'] = NULL;
$arguments67['class'] = NULL;
$arguments67['dir'] = NULL;
$arguments67['id'] = NULL;
$arguments67['lang'] = NULL;
$arguments67['style'] = NULL;
$arguments67['title'] = NULL;
$arguments67['accesskey'] = NULL;
$arguments67['tabindex'] = NULL;
$arguments67['onclick'] = NULL;
$arguments67['class'] = 'btn btn-default';
$arguments67['name'] = 'clear_object';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['key'] = NULL;
$arguments69['id'] = NULL;
$arguments69['default'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['languageKey'] = NULL;
$arguments69['alternativeLanguageKeys'] = NULL;
$arguments69['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:clearButton';
$arguments67['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output28 .= '
                    </div>
                </div>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
                    <div class="row mt-3">
                        <div class="col-auto">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
                                        <a href="';
$array108 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array108)]);

$output107 .= '" class="btn btn-default">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['key'] = NULL;
$arguments109['id'] = NULL;
$arguments109['default'] = NULL;
$arguments109['arguments'] = NULL;
$arguments109['extensionName'] = NULL;
$arguments109['languageKey'] = NULL;
$arguments109['alternativeLanguageKeys'] = NULL;
$arguments109['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:addKey';
// Rendering Array
$array111 = array();
$array112 = array (
);$array111['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array112);
$arguments109['arguments'] = $array111;

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext)]);

$output107 .= '
                                        </a>
                                    ';
return $output107;
};
$arguments102 = array();
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$arguments102['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array105);

$expression106 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments102['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)
					),
					$renderingContext
				);
$arguments102['__thenClosure'] = $renderChildrenClosure103;

$output101 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output101 .= '
                                ';
return $output101;
};
$arguments99 = array();

$output98 .= '';

$output98 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
                                    <a href="';
$array116 = array (
);
$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array116)]);

$output115 .= '" class="btn btn-default">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['key'] = NULL;
$arguments117['id'] = NULL;
$arguments117['default'] = NULL;
$arguments117['arguments'] = NULL;
$arguments117['extensionName'] = NULL;
$arguments117['languageKey'] = NULL;
$arguments117['alternativeLanguageKeys'] = NULL;
$arguments117['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:removeKey';

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext)]);

$output115 .= '
                                    </a>
                                ';
return $output115;
};
$arguments113 = array();
$arguments113['if'] = NULL;

$output98 .= '';

$output98 .= '
                            ';
return $output98;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('isNotInTopLevelKeyList', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments77['__thenClosure'] = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
                                        <a href="';
$array86 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array86)]);

$output85 .= '" class="btn btn-default">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['key'] = NULL;
$arguments87['id'] = NULL;
$arguments87['default'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['extensionName'] = NULL;
$arguments87['languageKey'] = NULL;
$arguments87['alternativeLanguageKeys'] = NULL;
$arguments87['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:addKey';
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array90);
$arguments87['arguments'] = $array89;

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output85 .= '
                                        </a>
                                    ';
return $output85;
};
$arguments80 = array();
$arguments80['then'] = NULL;
$arguments80['else'] = NULL;
$arguments80['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array82 = array();
$array83 = array (
);$array82['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array83);

$expression84 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments80['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array82)
					),
					$renderingContext
				);
$arguments80['__thenClosure'] = $renderChildrenClosure81;

$output79 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
                                ';
return $output79;
};
$arguments77['__elseClosures'][] = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
                                    <a href="';
$array92 = array (
);
$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array92)]);

$output91 .= '" class="btn btn-default">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['key'] = NULL;
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$arguments93['languageKey'] = NULL;
$arguments93['alternativeLanguageKeys'] = NULL;
$arguments93['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:removeKey';

$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);

$output91 .= '
                                    </a>
                                ';
return $output91;
};

$output76 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
                        </div>
                    </div>
                ';
return $output76;
};
$arguments71 = array();
$arguments71['then'] = NULL;
$arguments71['else'] = NULL;
$arguments71['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['0'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array74);

$expression75 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments71['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments71['__thenClosure'] = $renderChildrenClosure72;

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output28 .= '
            ';
return $output28;
};
$arguments26['__elseClosures'][] = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
                ';
$array120 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array120)]);

$output119 .= ' = <strong>';
$array121 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theSetupValue', $array121)]);

$output119 .= '</strong>
            ';
return $output119;
};

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
        <div class="row mt-3">
            <div class="col-auto">
                <a href="';
$array224 = array (
);
$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrl', $array224)]);

$output25 .= '" class="btn btn-default">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments225 = array();
$arguments225['identifier'] = NULL;
$arguments225['size'] = 'small';
$arguments225['overlay'] = NULL;
$arguments225['state'] = 'default';
$arguments225['alternativeMarkupIdentifier'] = NULL;
$arguments225['identifier'] = 'actions-chevron-left';

$output25 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output25 .= '&nbsp;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['key'] = NULL;
$arguments227['id'] = NULL;
$arguments227['default'] = NULL;
$arguments227['arguments'] = NULL;
$arguments227['extensionName'] = NULL;
$arguments227['languageKey'] = NULL;
$arguments227['alternativeLanguageKeys'] = NULL;
$arguments227['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:back';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext)]);

$output25 .= '
                </a>
            </div>
        </div>
    ';
return $output25;
};
$arguments23['__elseClosures'][] = function() use ($renderingContext, $self) {
$output229 = '';

$output229 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['pageTitle'] = '';
$arguments230['includeCssFiles'] = NULL;
$arguments230['includeJsFiles'] = NULL;
$arguments230['addJsInlineLabels'] = NULL;
$arguments230['includeRequireJsModules'] = NULL;
$arguments230['addInlineSettings'] = NULL;
// Rendering Array
$array232 = array();
$array232['0'] = 'TYPO3/CMS/Tstemplate/TypoScriptObjectBrowser';
$arguments230['includeRequireJsModules'] = $array232;

$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext)]);

$output229 .= '
        <div class="row row-cols-auto align-items-end">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$output238 = '';

$output238 .= '
                <div class="col">
                    <label class="form-label">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments239 = array();
$arguments239['key'] = NULL;
$arguments239['id'] = NULL;
$arguments239['default'] = NULL;
$arguments239['arguments'] = NULL;
$arguments239['extensionName'] = NULL;
$arguments239['languageKey'] = NULL;
$arguments239['alternativeLanguageKeys'] = NULL;
$arguments239['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:browse';

$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext)]);

$output238 .= '
                    </label>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$array243 = array (
);return $renderingContext->getVariableProvider()->getByPath('browserTypeDropdownMenu', $array243);
};
$arguments241 = array();
$arguments241['value'] = NULL;

$output238 .= isset($arguments241['value']) ? $arguments241['value'] : $renderChildrenClosure242();

$output238 .= '
                </div>
            ';
return $output238;
};
$arguments233 = array();
$arguments233['then'] = NULL;
$arguments233['else'] = NULL;
$arguments233['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array235 = array();
$array236 = array (
);$array235['0'] = $renderingContext->getVariableProvider()->getByPath('hasTsBrowserTypes', $array236);

$expression237 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments233['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression237(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array235)
					),
					$renderingContext
				);
$arguments233['__thenClosure'] = $renderChildrenClosure234;

$output229 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output229 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
                <div class="col">
                    <label class="form-label" for="ts_browser_toplevel_';
$array250 = array (
);
$output249 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tsBrowserType', $array250)]);

$output249 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments251 = array();
$arguments251['key'] = NULL;
$arguments251['id'] = NULL;
$arguments251['default'] = NULL;
$arguments251['arguments'] = NULL;
$arguments251['extensionName'] = NULL;
$arguments251['languageKey'] = NULL;
$arguments251['alternativeLanguageKeys'] = NULL;
$arguments251['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:objectList';

$output249 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext)]);

$output249 .= '
                    </label>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$array255 = array (
);return $renderingContext->getVariableProvider()->getByPath('objectListDropdownMenu', $array255);
};
$arguments253 = array();
$arguments253['value'] = NULL;

$output249 .= isset($arguments253['value']) ? $arguments253['value'] : $renderChildrenClosure254();

$output249 .= '
                </div>
            ';
return $output249;
};
$arguments244 = array();
$arguments244['then'] = NULL;
$arguments244['else'] = NULL;
$arguments244['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array246 = array();
$array247 = array (
);$array246['0'] = $renderingContext->getVariableProvider()->getByPath('hasTopLevelInObjectList', $array247);

$expression248 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments244['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression248(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array246)
					),
					$renderingContext
				);
$arguments244['__thenClosure'] = $renderChildrenClosure245;

$output229 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output229 .= '
            <div class="col">
                <label class="form-label" for="search_field">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['key'] = NULL;
$arguments256['id'] = NULL;
$arguments256['default'] = NULL;
$arguments256['arguments'] = NULL;
$arguments256['extensionName'] = NULL;
$arguments256['languageKey'] = NULL;
$arguments256['alternativeLanguageKeys'] = NULL;
$arguments256['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:search';

$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext)]);

$output229 .= '
                </label>
                <input class="form-control" type="text" name="search_field" id="search_field" value="';
$array258 = array (
);
$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('postSearchField', $array258)]);

$output229 .= '"/>
            </div>
            <div class="col">
                <div class="form-check form-switch">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$array261 = array (
);return $renderingContext->getVariableProvider()->getByPath('regexSearchCheckbox', $array261);
};
$arguments259 = array();
$arguments259['value'] = NULL;

$output229 .= isset($arguments259['value']) ? $arguments259['value'] : $renderChildrenClosure260();

$output229 .= '
                    <label class="form-check-label" for="checkTs_browser_regexsearch">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['key'] = NULL;
$arguments262['id'] = NULL;
$arguments262['default'] = NULL;
$arguments262['arguments'] = NULL;
$arguments262['extensionName'] = NULL;
$arguments262['languageKey'] = NULL;
$arguments262['alternativeLanguageKeys'] = NULL;
$arguments262['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:regExp';

$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext)]);

$output229 .= '
                    </label>
                </div>
            </div>
            <div class="col">
                <input class="btn btn-default" type="submit" name="search" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments264 = array();
$arguments264['key'] = NULL;
$arguments264['id'] = NULL;
$arguments264['default'] = NULL;
$arguments264['arguments'] = NULL;
$arguments264['extensionName'] = NULL;
$arguments264['languageKey'] = NULL;
$arguments264['alternativeLanguageKeys'] = NULL;
$arguments264['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:search';

$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext)]);

$output229 .= '"/>
            </div>
        </div>
        <div class="row row-cols-auto mt-3">
            <div class="col">
                <div class="form-check form-switch">
                    <label class="form-check-label" for="checkTs_browser_showComments">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments266 = array();
$arguments266['key'] = NULL;
$arguments266['id'] = NULL;
$arguments266['default'] = NULL;
$arguments266['arguments'] = NULL;
$arguments266['extensionName'] = NULL;
$arguments266['languageKey'] = NULL;
$arguments266['alternativeLanguageKeys'] = NULL;
$arguments266['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:displayComments';

$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext)]);

$output229 .= '
                    </label>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$array270 = array (
);return $renderingContext->getVariableProvider()->getByPath('checkBoxShowComments', $array270);
};
$arguments268 = array();
$arguments268['value'] = NULL;

$output229 .= isset($arguments268['value']) ? $arguments268['value'] : $renderChildrenClosure269();

$output229 .= '
                </div>
                <div class="form-check form-switch">
                    <label class="form-check-label" for="checkTs_browser_alphaSort">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments271 = array();
$arguments271['key'] = NULL;
$arguments271['id'] = NULL;
$arguments271['default'] = NULL;
$arguments271['arguments'] = NULL;
$arguments271['extensionName'] = NULL;
$arguments271['languageKey'] = NULL;
$arguments271['alternativeLanguageKeys'] = NULL;
$arguments271['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:sortAlphabetically';

$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext)]);

$output229 .= '
                    </label>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
$array275 = array (
);return $renderingContext->getVariableProvider()->getByPath('checkBoxAlphaSort', $array275);
};
$arguments273 = array();
$arguments273['value'] = NULL;

$output229 .= isset($arguments273['value']) ? $arguments273['value'] : $renderChildrenClosure274();

$output229 .= '
                </div>
            </div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$output281 = '';

$output281 .= '
                <div class="col">
                    <label class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['key'] = NULL;
$arguments282['id'] = NULL;
$arguments282['default'] = NULL;
$arguments282['arguments'] = NULL;
$arguments282['extensionName'] = NULL;
$arguments282['languageKey'] = NULL;
$arguments282['alternativeLanguageKeys'] = NULL;
$arguments282['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:displayConstants';

$output281 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext)]);

$output281 .= '</label>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$array286 = array (
);return $renderingContext->getVariableProvider()->getByPath('dropdownDisplayConstants', $array286);
};
$arguments284 = array();
$arguments284['value'] = NULL;

$output281 .= isset($arguments284['value']) ? $arguments284['value'] : $renderChildrenClosure285();

$output281 .= '
                </div>
            ';
return $output281;
};
$arguments276 = array();
$arguments276['then'] = NULL;
$arguments276['else'] = NULL;
$arguments276['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array278 = array();
$array279 = array (
);$array278['0'] = $renderingContext->getVariableProvider()->getByPath('isSetupAndCropLinesDisabled', $array279);

$expression280 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments276['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression280(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array278)
					),
					$renderingContext
				);
$arguments276['__thenClosure'] = $renderChildrenClosure277;

$output229 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output229 .= '
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
$output292 = '';

$output292 .= '
            <div class="mt-3 panel panel-default panel-collapse">
                <div class="panel-heading" role="tab" id="heading-tsConditions">
                    <h2 class="panel-title">
                        <a role="button" data-bs-toggle="collapse" href="#collapse-tsConditions" aria-expanded="false" aria-controls="collapse-tsConditions" class="collapsed">
                            <span class="caret"></span>
                            <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments293 = array();
$arguments293['key'] = NULL;
$arguments293['id'] = NULL;
$arguments293['default'] = NULL;
$arguments293['arguments'] = NULL;
$arguments293['extensionName'] = NULL;
$arguments293['languageKey'] = NULL;
$arguments293['alternativeLanguageKeys'] = NULL;
$arguments293['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:conditions';

$output292 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext)]);

$output292 .= '</strong>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
$output300 = '';

$output300 .= '
                                <span class="badge badge-warning">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments301 = array();
$arguments301['key'] = NULL;
$arguments301['id'] = NULL;
$arguments301['default'] = NULL;
$arguments301['arguments'] = NULL;
$arguments301['extensionName'] = NULL;
$arguments301['languageKey'] = NULL;
$arguments301['alternativeLanguageKeys'] = NULL;
$arguments301['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:activeConditions';
// Rendering Array
$array303 = array();
$array304 = array (
);$array303['0'] = $renderingContext->getVariableProvider()->getByPath('activeConditions', $array304);
$arguments301['arguments'] = $array303;

$output300 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext)]);

$output300 .= '
                                </span>
                            ';
return $output300;
};
$arguments295 = array();
$arguments295['then'] = NULL;
$arguments295['else'] = NULL;
$arguments295['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array297 = array();
$array298 = array (
);$array297['0'] = $renderingContext->getVariableProvider()->getByPath('activeConditions', $array298);

$expression299 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments295['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression299(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array297)
					),
					$renderingContext
				);
$arguments295['__thenClosure'] = $renderChildrenClosure296;

$output292 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output292 .= '
                        </a>
                    </h2>
                </div>
                <div class="collapse" id="collapse-tsConditions" role="tabpanel" aria-labelledby="heading-tsConditions">
                    <div class="panel-body">
                        <div class="row mb-3">
                            <div class="col-auto">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$output308 = '';

$output308 .= '
                                    <div class="form-check form-switch">
                                        <label class="form-check-label" for="check';
$array309 = array (
);
$output308 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('condition.key', $array309)]);

$output308 .= '">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$array312 = array (
);return $renderingContext->getVariableProvider()->getByPath('condition.label', $array312);
};
$arguments310 = array();
$arguments310['value'] = NULL;

$output308 .= isset($arguments310['value']) ? $arguments310['value'] : $renderChildrenClosure311();

$output308 .= '
                                        </label>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['additionalAttributes'] = NULL;
$arguments313['data'] = NULL;
$arguments313['aria'] = NULL;
$arguments313['name'] = NULL;
$arguments313['value'] = NULL;
$arguments313['property'] = NULL;
$arguments313['disabled'] = NULL;
$arguments313['errorClass'] = 'f3-form-error';
$arguments313['class'] = NULL;
$arguments313['dir'] = NULL;
$arguments313['id'] = NULL;
$arguments313['lang'] = NULL;
$arguments313['style'] = NULL;
$arguments313['title'] = NULL;
$arguments313['accesskey'] = NULL;
$arguments313['tabindex'] = NULL;
$arguments313['onclick'] = NULL;
$arguments313['checked'] = NULL;
$arguments313['multiple'] = false;
$arguments313['class'] = 'form-check-input';
$output315 = '';

$output315 .= 'conditions[';
$array316 = array (
);
$output315 .= $renderingContext->getVariableProvider()->getByPath('condition.key', $array316);

$output315 .= ']';
$arguments313['name'] = $output315;
$output317 = '';

$output317 .= 'check';
$array318 = array (
);
$output317 .= $renderingContext->getVariableProvider()->getByPath('condition.key', $array318);
$arguments313['id'] = $output317;
$array319 = array (
);$arguments313['value'] = $renderingContext->getVariableProvider()->getByPath('condition.value', $array319);
// Rendering Boolean node
// Rendering Array
$array320 = array();
$array321 = array (
);$array320['0'] = $renderingContext->getVariableProvider()->getByPath('condition.isSet', $array321);

$expression322 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments313['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression322(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array320)
					),
					$renderingContext
				);

$output308 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output308 .= '
                                    </div>
                                ';
return $output308;
};
$arguments305 = array();
$arguments305['each'] = NULL;
$arguments305['as'] = NULL;
$arguments305['key'] = NULL;
$arguments305['reverse'] = false;
$arguments305['iteration'] = NULL;
$array307 = array (
);$arguments305['each'] = $renderingContext->getVariableProvider()->getByPath('tsConditions', $array307);
$arguments305['as'] = 'condition';

$output292 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output292 .= '
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments323 = array();
$arguments323['additionalAttributes'] = NULL;
$arguments323['data'] = NULL;
$arguments323['aria'] = NULL;
$arguments323['name'] = NULL;
$arguments323['value'] = NULL;
$arguments323['property'] = NULL;
$arguments323['disabled'] = NULL;
$arguments323['class'] = NULL;
$arguments323['dir'] = NULL;
$arguments323['id'] = NULL;
$arguments323['lang'] = NULL;
$arguments323['style'] = NULL;
$arguments323['title'] = NULL;
$arguments323['accesskey'] = NULL;
$arguments323['tabindex'] = NULL;
$arguments323['onclick'] = NULL;
$arguments323['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['key'] = NULL;
$arguments325['id'] = NULL;
$arguments325['default'] = NULL;
$arguments325['arguments'] = NULL;
$arguments325['extensionName'] = NULL;
$arguments325['languageKey'] = NULL;
$arguments325['alternativeLanguageKeys'] = NULL;
$arguments325['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:setConditions';
$arguments323['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);
$arguments323['name'] = 'Submit';

$output292 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output292 .= '
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ';
return $output292;
};
$arguments287 = array();
$arguments287['then'] = NULL;
$arguments287['else'] = NULL;
$arguments287['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array289 = array();
$array290 = array (
);$array289['0'] = $renderingContext->getVariableProvider()->getByPath('hasConditions', $array290);

$expression291 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments287['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression291(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array289)
					),
					$renderingContext
				);
$arguments287['__thenClosure'] = $renderChildrenClosure288;

$output229 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);

$output229 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
$output332 = '';

$output332 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
$output337 = '';

$output337 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
$output341 = '';

$output341 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments342 = array();
$arguments342['key'] = NULL;
$arguments342['id'] = NULL;
$arguments342['default'] = NULL;
$arguments342['arguments'] = NULL;
$arguments342['extensionName'] = NULL;
$arguments342['languageKey'] = NULL;
$arguments342['alternativeLanguageKeys'] = NULL;
$output344 = '';

$output344 .= 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:severity.';
$array345 = array (
);
$output344 .= $renderingContext->getVariableProvider()->getByPath('parseError.1', $array345);
$arguments342['key'] = $output344;

$output341 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext)]);

$output341 .= '
                    : ';
$array346 = array (
);
$output341 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('parseError.0', $array346)]);

$output341 .= '
                    <a href="';
$array347 = array (
);
$output341 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('showErrorDetailsUri', $array347)]);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string348 = '{parseError.2 + parseError.3}';
$array349 = array (
  0 => '{parseError.2 + parseError.3}',
  1 => '{parseError.2 + parseError.3}',
);

$output341 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string348, $array349)]);

$output341 .= '"  class="text-warning">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments350 = array();
$arguments350['key'] = NULL;
$arguments350['id'] = NULL;
$arguments350['default'] = NULL;
$arguments350['arguments'] = NULL;
$arguments350['extensionName'] = NULL;
$arguments350['languageKey'] = NULL;
$arguments350['alternativeLanguageKeys'] = NULL;
$arguments350['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:errorShowDetails';

$output341 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext)]);

$output341 .= '
                    </a>
                    <br/>
                ';
return $output341;
};
$arguments338 = array();
$arguments338['each'] = NULL;
$arguments338['as'] = NULL;
$arguments338['key'] = NULL;
$arguments338['reverse'] = false;
$arguments338['iteration'] = NULL;
$array340 = array (
);$arguments338['each'] = $renderingContext->getVariableProvider()->getByPath('parseErrors', $array340);
$arguments338['as'] = 'parseError';

$output337 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);

$output337 .= '
            ';
return $output337;
};
$arguments333 = array();
$arguments333['message'] = NULL;
$arguments333['title'] = NULL;
$arguments333['state'] = -2;
$arguments333['iconName'] = NULL;
$arguments333['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments335 = array();
$arguments335['key'] = NULL;
$arguments335['id'] = NULL;
$arguments335['default'] = NULL;
$arguments335['arguments'] = NULL;
$arguments335['extensionName'] = NULL;
$arguments335['languageKey'] = NULL;
$arguments335['alternativeLanguageKeys'] = NULL;
$arguments335['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:errorsWarnings';
$arguments333['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);
$arguments333['state'] = 1;
$renderChildrenClosure334 = ($arguments333['message'] !== null) ? function() use ($arguments333) { return $arguments333['message']; } : $renderChildrenClosure334;
$output332 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output332 .= '
        ';
return $output332;
};
$arguments327 = array();
$arguments327['then'] = NULL;
$arguments327['else'] = NULL;
$arguments327['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array329 = array();
$array330 = array (
);$array329['0'] = $renderingContext->getVariableProvider()->getByPath('hasParseErrors', $array330);

$expression331 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments327['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression331(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array329)
					),
					$renderingContext
				);
$arguments327['__thenClosure'] = $renderChildrenClosure328;

$output229 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext);

$output229 .= '
        <div class="mt-3 panel panel-default">
            <div class="panel-heading">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
$output367 = '';

$output367 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
$output370 = '';

$output370 .= '
                        <strong>';
$array371 = array (
);
$output370 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('treeLabel', $array371)]);

$output370 .= '</strong>
                    ';
return $output370;
};
$arguments368 = array();

$output367 .= '';

$output367 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
$output374 = '';

$output374 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
$output377 = '';

$output377 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments378 = array();
$arguments378['key'] = NULL;
$arguments378['id'] = NULL;
$arguments378['default'] = NULL;
$arguments378['arguments'] = NULL;
$arguments378['extensionName'] = NULL;
$arguments378['languageKey'] = NULL;
$arguments378['alternativeLanguageKeys'] = NULL;
$output380 = '';

$output380 .= 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:';
$array381 = array (
);
$output380 .= $renderingContext->getVariableProvider()->getByPath('rootLLKey', $array381);
$arguments378['key'] = $output380;

$output377 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments378, $renderChildrenClosure379, $renderingContext);

$output377 .= '
                        ';
return $output377;
};
$arguments375 = array();
$arguments375['value'] = NULL;
$arguments375['mode'] = 'upper';
$arguments375['mode'] = 'upper';

$output374 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext)]);

$output374 .= '
                    ';
return $output374;
};
$arguments372 = array();
$arguments372['if'] = NULL;

$output367 .= '';

$output367 .= '
                ';
return $output367;
};
$arguments352 = array();
$arguments352['then'] = NULL;
$arguments352['else'] = NULL;
$arguments352['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array364 = array();
$array365 = array (
);$array364['0'] = $renderingContext->getVariableProvider()->getByPath('hasKeySelected', $array365);

$expression366 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments352['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression366(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array364)
					),
					$renderingContext
				);
$arguments352['__thenClosure'] = function() use ($renderingContext, $self) {
$output354 = '';

$output354 .= '
                        <strong>';
$array355 = array (
);
$output354 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('treeLabel', $array355)]);

$output354 .= '</strong>
                    ';
return $output354;
};
$arguments352['__elseClosures'][] = function() use ($renderingContext, $self) {
$output356 = '';

$output356 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$output359 = '';

$output359 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments360 = array();
$arguments360['key'] = NULL;
$arguments360['id'] = NULL;
$arguments360['default'] = NULL;
$arguments360['arguments'] = NULL;
$arguments360['extensionName'] = NULL;
$arguments360['languageKey'] = NULL;
$arguments360['alternativeLanguageKeys'] = NULL;
$output362 = '';

$output362 .= 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:';
$array363 = array (
);
$output362 .= $renderingContext->getVariableProvider()->getByPath('rootLLKey', $array363);
$arguments360['key'] = $output362;

$output359 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext);

$output359 .= '
                        ';
return $output359;
};
$arguments357 = array();
$arguments357['value'] = NULL;
$arguments357['mode'] = 'upper';
$arguments357['mode'] = 'upper';

$output356 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext)]);

$output356 .= '
                    ';
return $output356;
};

$output229 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments352, $renderChildrenClosure353, $renderingContext);

$output229 .= '
                <strong>';
$array382 = array (
);
$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedKey', $array382)]);

$output229 .= '</strong>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
$output388 = '';

$output388 .= '
                    <a href="';
$array389 = array (
);
$output388 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleUrlRemoveFromObjectList', $array389)]);

$output388 .= '" class="btn btn-default">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments390 = array();
$arguments390['key'] = NULL;
$arguments390['id'] = NULL;
$arguments390['default'] = NULL;
$arguments390['arguments'] = NULL;
$arguments390['extensionName'] = NULL;
$arguments390['languageKey'] = NULL;
$arguments390['alternativeLanguageKeys'] = NULL;
$arguments390['key'] = 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_objbrowser.xlf:removeKey';

$output388 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext)]);

$output388 .= '
                    </a>
                ';
return $output388;
};
$arguments383 = array();
$arguments383['then'] = NULL;
$arguments383['else'] = NULL;
$arguments383['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array385 = array();
$array386 = array (
);$array385['0'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlRemoveFromObjectList', $array386);

$expression387 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments383['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression387(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array385)
					),
					$renderingContext
				);
$arguments383['__thenClosure'] = $renderChildrenClosure384;

$output229 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);

$output229 .= '
            </div>
            <div class="panel-body tstemplate-tsobjectbrowser-content">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
$array394 = array (
);return $renderingContext->getVariableProvider()->getByPath('tsTree', $array394);
};
$arguments392 = array();
$arguments392['value'] = NULL;

$output229 .= isset($arguments392['value']) ? $arguments392['value'] : $renderChildrenClosure393();

$output229 .= '</div>
        </div>
    ';
return $output229;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#