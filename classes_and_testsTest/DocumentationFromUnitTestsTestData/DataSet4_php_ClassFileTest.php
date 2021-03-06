<?php
namespace DocumentationFromUnitTestsTestData {
	require_once strstr(__FILE__, 'Test', true).'/aae/std/AutoLoader.php';
	class DataClassFileTest extends \PHPUnit_Framework_TestCase {
		public function test_functionName1_test_case_4() {
			// Given: First test function line one
			$obj = new aClass();
			$expected = "Some result";
			$parameter1 = False
		
			// When: First test function line two
			$result = $obj->functionName1($parameter1);
			
			// Then: First test function line three
			$this->assertEquals($expected, $result);
		}

		public function test_functionName1_second_test_function() {
			// Given: Second test function Given: line
			$obj = new aClass();
			$expected = "Some result";
			$parameter1 = False
		
			// When: Second test function When: line
			$result = $obj->functionName1($parameter1);
			
			// Then: Second test function Then: line
			$this->assertEquals($expected, $result);
		}

		public function test_functionName1_third_test_function() {
			// Given: Last test function third from last line
			$obj = new aClass();
			$expected = "Some result";
			$parameter1 = False
		
			// When: Last test function second from last line
			$result = $obj->functionName1($parameter1);
			
			// Then: Last test function last line
			$this->assertEquals($expected, $result);
		}
	}
}