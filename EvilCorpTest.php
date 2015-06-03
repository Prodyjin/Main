<?php


require_once 'EvilCorp.php';

class EvilCorpTest extends \PHPUnit_Framework_TestCase
{
    public function obfuscation2DataProvider()
    {
        return array(
            array(array('nice'), 'You are a nice person', 'You are a XXXX person'),
            array(array('nice'), 'You are a bad person', 'You are a bad person'),
            array(array('nice'), 'You are a really nice person', 'You are a really XXXX person'),
            array(array('nice'), 'You are a nice nice person', 'You are a XXXX XXXX person'),
            array(array('good'), 'You are a nice person', 'You are a nice person'),
            array(array('good'), 'You are a good person', 'You are a XXXX person'),
            array(array('bad'), 'You are a bad person', 'You are a XXX person'),
            array(
                array('nice', 'pony', 'sun', 'light', 'fun', 'happy', 'funny', 'joy'),
                'Such a nice day with a bright sun, makes me happy',
                'Such a XXXX day with a bright XXX, makes me XXXXX'
            ),
            array(
                array('nice', 'pony', 'sun', 'light', 'fun', 'happy', 'funny', 'joy', 'a.b'),
                'Such a nice day with a bright sun, makes me a.b acb happy',
                'Such a XXXX day with a bright XXX, makes me XXX acb XXXXX'
            ),
            array(
                array('nice', 'pony', 'sun', 'light', 'fun', 'happy', 'funny', 'joy', 'ak'),
                'Such a nice day with a bright sun, makes me happy',
                'Such a XXXX day with a bright XXX, makes me XXXXX'
            ),
            array(
                array('nice', 'pony', 'sun', 'light', 'fun', 'happy', 'funny', 'joy', 'make'),
                'Such a nice day with a bright sun, makes me happy',
                'Such a XXXX day with a bright XXX, XXXXX me XXXXX'
            ),
        );
    }

    /**
     * @dataProvider obfuscation2DataProvider
     */
    public function testObfuscation(array $word, $original, $obfuscated)
    {
        $ec = new EvilCorp($word);
        $this->assertEquals($obfuscated, $ec->obfuscate($original));
    }
}
