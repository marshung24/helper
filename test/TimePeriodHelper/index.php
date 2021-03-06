<?php
include_once '../../vendor/autoload.php';

use marshung\helper\TimePeriodHelper;
use marshung\helperTest\tools\DevTools;
use marshung\helperTest\TimePeriodHelper\Test;

echo '<pre>';

// Test Sort
Test::testSort();

// Test Union
Test::testUnion();

// Test Diff
Test::testDiff();

// Test Intersect
Test::testIntersect();

// Test IsOverlap
Test::testIsOverlap();

// Test Fill
Test::testFill();

// Test Gap
Test::testGap();

// Test Time
Test::testTime();

// Test Format
Test::testFormat();

// Test Validate
Test::testValidate();

// Test Filter
Test::testFilter();


