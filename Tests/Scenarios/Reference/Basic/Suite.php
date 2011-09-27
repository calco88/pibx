<?php
/**
 * Copyright (c) 2010-2011, Christoph Gockel.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 *
 * * Redistributions of source code must retain the above copyright notice, this
 *   list of conditions and the following disclaimer.
 * * Redistributions in binary form must reproduce the above copyright notice,
 *   this list of conditions and the following disclaimer in the documentation
 *   and/or other materials provided with the distribution.
 * * Neither the name of PiBX nor the names of its contributors may be used
 *   to endorse or promote products derived from this software without specific
 *   prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
 * ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
 * ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */
require_once dirname(__FILE__) . '/../../../bootstrap.php';
require_once 'PHPUnit/Autoload.php';
require_once 'Tests/Scenarios/Reference/Basic/QualifiedLocalElementsTest.php';
require_once 'Tests/Scenarios/Reference/Basic/TargetNamespaceTest.php';
require_once 'Tests/Scenarios/Reference/Basic/IdentifierNameTest.php';
require_once 'Tests/Scenarios/Reference/Basic/NonIdentifierNameTest.php';
require_once 'Tests/Scenarios/Reference/Basic/StringElementTest.php';
require_once 'Tests/Scenarios/Reference/Basic/StringAttributeTest.php';
require_once 'Tests/Scenarios/Reference/Basic/BooleanElementTest.php';
require_once 'Tests/Scenarios/Reference/Basic/BooleanAttributeTest.php';
require_once 'Tests/Scenarios/Reference/Basic/DoubleElementTest.php';
require_once 'Tests/Scenarios/Reference/Basic/DoubleAttributeTest.php';
/**
 * Basic Reference Test-Suite.
 *
 * @author Christoph Gockel
 */
class PiBX_Scenarios_Reference_Basic_Suite extends PHPUnit_Framework_TestSuite {

    public static function suite() {
        $suite = new PHPUnit_Framework_TestSuite();
        
        $suite->addTestSuite('PiBX_Scenarios_Reference_Basic_QualifiedLocalElementsTest');
        $suite->addTestSuite('PiBX_Scenarios_Reference_Basic_TargetNamespaceTest');
        $suite->addTestSuite('PiBX_Scenarios_Reference_Basic_IdentifierNameTest');
        $suite->addTestSuite('PiBX_Scenarios_Reference_Basic_NonIdentifierNameTest');
        $suite->addTestSuite('PiBX_Scenarios_Reference_Basic_StringElementTest');
        $suite->addTestSuite('PiBX_Scenarios_Reference_Basic_StringAttributeTest');
        $suite->addTestSuite('PiBX_Scenarios_Reference_Basic_BooleanElementTest');
        $suite->addTestSuite('PiBX_Scenarios_Reference_Basic_BooleanAttributeTest');
        $suite->addTestSuite('PiBX_Scenarios_Reference_Basic_DoubleElementTest');
        $suite->addTestSuite('PiBX_Scenarios_Reference_Basic_DoubleAttributeTest');
        
        return $suite;
    }
}
