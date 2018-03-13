<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 08.03.18
 * Time: 22:13
 */

namespace Alex\Sort;


use PHPUnit\Framework\TestCase;

abstract class AbstractTestCase extends TestCase
{
    /**
     * @var Sorter;
     */
    protected $fixture;

    /**
     * Build the respective fixture
     *
     * @return Sorter
     */
    abstract protected function getFixture(): Sorter;

    /**
     * AbstractTestCase constructor.
     * @param null $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->fixture = $this->getFixture();
    }

    /**
     * @param array $sortables
     * @dataProvider provideTestData
     */
    public function testSorting(array $sortables)
    {
        $result = $sortables;
        $this->fixture->__invoke($result);

        self::assertEquals(
            count($sortables),
            count($result)
        );

        foreach ($result as $key => $value) {
            if (array_key_exists($key-1, $result)) {
                self::assertGreaterThanOrEqual(
                    $result[$key-1],
                    $value
                );
            }
        }
    }

    /**
     * @return array
     */
    public function provideTestData()
    {
        $dataFiles = ['random10', 'random100'];
        $output = [];
        $dataProvider = new DataProvider;
        foreach ($dataFiles as $file) {
            if (is_file(__DIR__ . '/data/' . $file)) {
                $output[] = [$dataProvider($file)];
            }
        }

        return $output;
    }
}