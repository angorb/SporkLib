<?php
/**
 * This is an automatically generated baseline for Phan issues.
 * When Phan is invoked with --load-baseline=path/to/baseline.php,
 * The pre-existing issues listed in this file won't be emitted.
 *
 * This file can be updated by invoking Phan with --save-baseline=path/to/baseline.php
 * (can be combined with --load-baseline)
 */
return [
    // # Issue statistics:
    // PhanUndeclaredMethod : 120+ occurrences
    // PhanUndeclaredClassMethod : 100+ occurrences
    // PhanUndeclaredConstant : 45+ occurrences
    // PhanUnextractableAnnotationElementName : 40+ occurrences
    // PhanUndeclaredStaticProperty : 30+ occurrences
    // PhanUndeclaredProperty : 25+ occurrences
    // PhanTypeMismatchArgumentProbablyReal : 20+ occurrences
    // PhanUndeclaredClassProperty : 20+ occurrences
    // PhanPossiblyUndeclaredVariable : 15+ occurrences
    // PhanUnreferencedUseNormal : 15+ occurrences
    // PhanTypeMismatchReturn : 10+ occurrences
    // PhanUndeclaredTypeReturnType : 10+ occurrences
    // PhanTypeMismatchArgument : 8 occurrences
    // PhanUndeclaredTypeParameter : 7 occurrences
    // PhanParamNameIndicatingUnused : 6 occurrences
    // PhanTypeMismatchReturnProbablyReal : 6 occurrences
    // PhanUndeclaredClassConstant : 6 occurrences
    // PhanUnextractableAnnotationSuffix : 6 occurrences
    // PhanAccessMethodProtected : 5 occurrences
    // PhanMisspelledAnnotation : 5 occurrences
    // PhanCommentParamWithoutRealParam : 4 occurrences
    // PhanSyntaxReturnValueInVoid : 4 occurrences
    // PhanTypeMagicVoidWithReturn : 4 occurrences
    // PhanTypeMismatchArgumentInternal : 4 occurrences
    // PhanTypeMismatchDefault : 4 occurrences
    // PhanUndeclaredClassCatch : 4 occurrences
    // PhanParamSignatureMismatchInternal : 3 occurrences
    // PhanTypeArraySuspiciousNullable : 3 occurrences
    // PhanTypeExpectedObjectPropAccessButGotNull : 3 occurrences
    // PhanTypeMismatchArgumentNullable : 3 occurrences
    // PhanTypeObjectUnsetDeclaredProperty : 3 occurrences
    // PhanDeprecatedFunctionInternal : 2 occurrences
    // PhanParamTooMany : 2 occurrences
    // PhanTypeInvalidLeftOperandOfAdd : 2 occurrences
    // PhanTypeInvalidRightOperandOfAdd : 2 occurrences
    // PhanTypeMismatchArgumentInternalReal : 2 occurrences
    // PhanTypeMismatchArgumentNullableInternal : 2 occurrences
    // PhanTypeMismatchDimAssignment : 2 occurrences
    // PhanUndeclaredConstantOfClass : 2 occurrences
    // PhanCompatibleImplodeOrder : 1 occurrence
    // PhanCompatiblePHP7 : 1 occurrence
    // PhanNonClassMethodCall : 1 occurrence
    // PhanTypeArraySuspicious : 1 occurrence
    // PhanTypeInvalidRightOperandOfNumericOp : 1 occurrence
    // PhanTypeMismatchProperty : 1 occurrence
    // PhanTypeMissingReturn : 1 occurrence
    // PhanTypePossiblyInvalidDimOffset : 1 occurrence
    // PhanUndeclaredVariableDim : 1 occurrence
    // PhanUnextractableAnnotation : 1 occurrence

    // Currently, file_suppressions and directory_suppressions are the only supported suppressions
    'file_suppressions' => [
        'lib/SparkFinder.php' => ['PhanUndeclaredProperty'],
        'lib/SparkFriendFinder.php' => ['PhanPossiblyUndeclaredVariable', 'PhanSyntaxReturnValueInVoid', 'PhanTypeMismatchReturn', 'PhanTypeMismatchReturnProbablyReal', 'PhanUndeclaredClassMethod', 'PhanUndeclaredConstantOfClass', 'PhanUndeclaredTypeReturnType', 'PhanUnreferencedUseNormal'],
        'lib/SparkLib/Application.php' => ['PhanPossiblyUndeclaredVariable', 'PhanTypeMismatchArgumentProbablyReal', 'PhanUndeclaredConstant', 'PhanUndeclaredProperty', 'PhanUnextractableAnnotationElementName', 'PhanUnreferencedUseNormal'],
        'lib/SparkLib/Application/Controller.php' => ['PhanCommentParamWithoutRealParam', 'PhanTypeMismatchArgumentInternalReal', 'PhanTypeMismatchArgumentProbablyReal', 'PhanTypeMismatchReturn', 'PhanUndeclaredClassCatch', 'PhanUndeclaredClassMethod', 'PhanUndeclaredClassProperty', 'PhanUndeclaredProperty', 'PhanUndeclaredTypeParameter', 'PhanUndeclaredTypeReturnType', 'PhanUnextractableAnnotationElementName', 'PhanUnreferencedUseNormal'],
        'lib/SparkLib/Application/ControllerRole/AjaxHandler.php' => ['PhanUndeclaredMethod'],
        'lib/SparkLib/Application/ControllerRole/BlogPostHandler.php' => ['PhanUndeclaredClassConstant', 'PhanUndeclaredClassMethod', 'PhanUndeclaredMethod'],
        'lib/SparkLib/Application/ControllerRole/CommentHandler.php' => ['PhanPossiblyUndeclaredVariable', 'PhanTypeMissingReturn', 'PhanUndeclaredClassMethod', 'PhanUndeclaredClassProperty', 'PhanUndeclaredMethod', 'PhanUnreferencedUseNormal'],
        'lib/SparkLib/Application/ControllerRole/ErrorHandler.php' => ['PhanUndeclaredClassMethod', 'PhanUndeclaredConstant', 'PhanUndeclaredMethod'],
        'lib/SparkLib/Application/ControllerRole/PageHandlerBase.php' => ['PhanUndeclaredClassConstant', 'PhanUndeclaredClassMethod', 'PhanUndeclaredClassProperty'],
        'lib/SparkLib/Application/ControllerRole/StaticContentHandlerTrait.php' => ['PhanUndeclaredClassMethod', 'PhanUndeclaredClassProperty', 'PhanUndeclaredMethod', 'PhanUndeclaredTypeParameter'],
        'lib/SparkLib/Application/Environment.php' => ['PhanTypeMismatchReturnProbablyReal'],
        'lib/SparkLib/Application/Link.php' => ['PhanUnextractableAnnotationElementName'],
        'lib/SparkLib/Application/Request.php' => ['PhanMisspelledAnnotation', 'PhanTypeMagicVoidWithReturn', 'PhanUnextractableAnnotationElementName'],
        'lib/SparkLib/Autoloader.php' => ['PhanUndeclaredConstant', 'PhanUnextractableAnnotationElementName'],
        'lib/SparkLib/Blode/Event.php' => ['PhanUndeclaredConstant'],
        'lib/SparkLib/Bugzilla.php' => ['PhanTypeMismatchDimAssignment', 'PhanTypeMismatchReturn', 'PhanUndeclaredTypeReturnType'],
        'lib/SparkLib/DB.php' => ['PhanCommentParamWithoutRealParam', 'PhanMisspelledAnnotation', 'PhanTypeMismatchDefault', 'PhanUndeclaredClassCatch', 'PhanUndeclaredConstant', 'PhanUnextractableAnnotationElementName'],
        'lib/SparkLib/DB/Random.php' => ['PhanUndeclaredProperty'],
        'lib/SparkLib/Exception/AuthenticationException.php' => ['PhanParamTooMany', 'PhanUndeclaredTypeParameter'],
        'lib/SparkLib/Exception/SparkException.php' => ['PhanTypeMismatchArgumentInternal', 'PhanUndeclaredTypeParameter'],
        'lib/SparkLib/Fail.php' => ['PhanUndeclaredClassMethod'],
        'lib/SparkLib/HTML.php' => ['PhanUnextractableAnnotationElementName'],
        'lib/SparkLib/IataClassifier/IataClassifier.php' => ['PhanUnreferencedUseNormal'],
        'lib/SparkLib/IataClassifier/IataLiIonBattery.php' => ['PhanUnreferencedUseNormal'],
        'lib/SparkLib/IataClassifier/IataLiMetalBattery.php' => ['PhanUndeclaredMethod'],
        'lib/SparkLib/IataClassifier/IataPackage.php' => ['PhanAccessMethodProtected', 'PhanUndeclaredClassMethod'],
        'lib/SparkLib/Image/Compressor.php' => ['PhanUndeclaredClassMethod', 'PhanUndeclaredClassProperty', 'PhanUndeclaredConstant'],
        'lib/SparkLib/Iterator.php' => ['PhanTypeMismatchReturn', 'PhanUndeclaredTypeReturnType'],
        'lib/SparkLib/Iterator/Wrapper.php' => ['PhanSyntaxReturnValueInVoid', 'PhanUndeclaredMethod'],
        'lib/SparkLib/MongoFinder.php' => ['PhanCommentParamWithoutRealParam', 'PhanParamSignatureMismatchInternal', 'PhanTypeMagicVoidWithReturn', 'PhanTypeMismatchDefault', 'PhanTypeMismatchReturnProbablyReal', 'PhanTypeObjectUnsetDeclaredProperty', 'PhanUndeclaredClassMethod', 'PhanUndeclaredConstant', 'PhanUndeclaredTypeReturnType', 'PhanUnextractableAnnotationSuffix'],
        'lib/SparkLib/PDF.php' => ['PhanUndeclaredClassMethod'],
        'lib/SparkLib/SocialNoise.php' => ['PhanUndeclaredClassMethod'],
        'lib/SparkLib/SocialNoise/GooglePlus.php' => ['PhanUnreferencedUseNormal'],
        'lib/SparkLib/SocialNoise/Twitter.php' => ['PhanUnreferencedUseNormal'],
        'lib/SparkLib/Sparkdown.php' => ['PhanNonClassMethodCall', 'PhanPossiblyUndeclaredVariable', 'PhanUndeclaredClassConstant', 'PhanUndeclaredClassMethod'],
        'lib/SparkLib/SparkdownMacro/Equation.php' => ['PhanUndeclaredClassMethod', 'PhanUndeclaredProperty'],
        'lib/SparkLib/Template.php' => ['PhanParamTooMany', 'PhanTypeArraySuspicious', 'PhanTypeMagicVoidWithReturn', 'PhanTypeMismatchArgumentInternal', 'PhanTypeMismatchReturn', 'PhanUndeclaredClassCatch', 'PhanUndeclaredConstant', 'PhanUndeclaredTypeParameter', 'PhanUnextractableAnnotationElementName', 'PhanUnreferencedUseNormal'],
        'lib/SparkLib/UPS/Rate.php' => ['PhanTypeExpectedObjectPropAccessButGotNull', 'PhanTypeMismatchArgument', 'PhanTypeMismatchArgumentProbablyReal', 'PhanUndeclaredConstant', 'PhanUndeclaredProperty', 'PhanUnreferencedUseNormal'],
        'lib/SparkLib/UPS/Rate/Property.php' => ['PhanParamNameIndicatingUnused'],
        'lib/SparkLib/UPS/Ship/SchemaType/Property.php' => ['PhanParamNameIndicatingUnused'],
        'lib/SparkLib/UPS/Ship/SchemaType/ShipToType.php' => ['PhanTypeMismatchProperty', 'PhanTypeMismatchReturn'],
        'lib/SparkLib/UPS/Ship/Ship.php' => ['PhanTypeExpectedObjectPropAccessButGotNull', 'PhanTypeMismatchArgument', 'PhanTypeMismatchArgumentNullable', 'PhanTypeMismatchArgumentProbablyReal', 'PhanUndeclaredConstant', 'PhanUndeclaredProperty', 'PhanUnreferencedUseNormal'],
        'lib/SparkLib/UPS/StreetAddressValidate.php' => ['PhanTypeExpectedObjectPropAccessButGotNull', 'PhanTypeMismatchArgumentProbablyReal', 'PhanUndeclaredConstant'],
        'lib/SparkLib/UPS/StreetAddressValidate/Property.php' => ['PhanParamNameIndicatingUnused'],
        'lib/SparkLib/Util/DateTime.php' => ['PhanPossiblyUndeclaredVariable', 'PhanTypeInvalidRightOperandOfNumericOp', 'PhanTypeMismatchDefault', 'PhanTypePossiblyInvalidDimOffset', 'PhanUndeclaredTypeParameter', 'PhanUnextractableAnnotationElementName', 'PhanUnextractableAnnotationSuffix'],
        'lib/SparkLib/Util/Mime.php' => ['PhanUndeclaredStaticProperty'],
        'lib/SparkLib/Util/Text.php' => ['PhanDeprecatedFunctionInternal', 'PhanTypeMismatchReturn', 'PhanUnreferencedUseNormal'],
        'lib/SparkLib/Util/Timer.php' => ['PhanTypeInvalidLeftOperandOfAdd', 'PhanTypeInvalidRightOperandOfAdd'],
        'lib/SparkLib/Validator.php' => ['PhanUndeclaredMethod', 'PhanUnextractableAnnotationElementName', 'PhanUnextractableAnnotationSuffix'],
        'lib/SparkLib/ValidatorException.php' => ['PhanPossiblyUndeclaredVariable', 'PhanTypeMismatchArgumentNullableInternal', 'PhanTypeMismatchReturn', 'PhanUndeclaredTypeReturnType'],
        'lib/SparkLib/Xml/Builder.php' => ['PhanTypeMismatchArgumentInternal', 'PhanUndeclaredClassMethod'],
        'lib/SparkLib/jsonRPC/Client.php' => ['PhanTypeArraySuspiciousNullable', 'PhanTypeMismatchReturnProbablyReal', 'PhanUndeclaredProperty'],
        'lib/SparkRecord.php' => ['PhanCompatibleImplodeOrder', 'PhanCompatiblePHP7', 'PhanDeprecatedFunctionInternal', 'PhanPossiblyUndeclaredVariable', 'PhanTypeMagicVoidWithReturn', 'PhanTypeMismatchArgumentInternalReal', 'PhanTypeMismatchArgumentNullableInternal', 'PhanTypeMismatchReturn', 'PhanTypeMismatchReturnProbablyReal', 'PhanUndeclaredClassMethod', 'PhanUndeclaredConstant', 'PhanUndeclaredStaticProperty', 'PhanUndeclaredVariableDim', 'PhanUnextractableAnnotation', 'PhanUnextractableAnnotationElementName'],
    ],
    // 'directory_suppressions' => ['src/directory_name' => ['PhanIssueName1', 'PhanIssueName2']] can be manually added if needed.
    // (directory_suppressions will currently be ignored by subsequent calls to --save-baseline, but may be preserved in future Phan releases)
];
