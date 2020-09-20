<?php

namespace App\Validator\Admin\Blog;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ReviewArticlesValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint): void
    {
        /* @var $constraint ReviewArticles */
        if (null === $value || '' === $value) {
            return;
        }

        // TODO: implement the validation here
//        $this->context->buildViolation($constraint->message)
//            ->setParameter('{{ value }}', $value)
//            ->addViolation();
    }
}
