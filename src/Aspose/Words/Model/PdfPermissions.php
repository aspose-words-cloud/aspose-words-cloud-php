<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PdfPermissions.php">
 *   Copyright (c) 2024 Aspose.Words for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * PdfPermissions
 *
 * @description Specifies the operations that are allowed to a user on an encrypted PDF document.
 */
class PdfPermissions
{
    /*
     * Possible values of this enum
     */
    const DISALLOW_ALL = 'DisallowAll';
    const PRINTING = 'Printing';
    const MODIFY_CONTENTS = 'ModifyContents';
    const CONTENT_COPY = 'ContentCopy';
    const MODIFY_ANNOTATIONS = 'ModifyAnnotations';
    const FILL_IN = 'FillIn';
    const CONTENT_COPY_FOR_ACCESSIBILITY = 'ContentCopyForAccessibility';
    const DOCUMENT_ASSEMBLY = 'DocumentAssembly';
    const HIGH_RESOLUTION_PRINTING = 'HighResolutionPrinting';
    const ALLOW_ALL = 'AllowAll';

    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DISALLOW_ALL,
            self::PRINTING,
            self::MODIFY_CONTENTS,
            self::CONTENT_COPY,
            self::MODIFY_ANNOTATIONS,
            self::FILL_IN,
            self::CONTENT_COPY_FOR_ACCESSIBILITY,
            self::DOCUMENT_ASSEMBLY,
            self::HIGH_RESOLUTION_PRINTING,
            self::ALLOW_ALL
        ];
    }
}
