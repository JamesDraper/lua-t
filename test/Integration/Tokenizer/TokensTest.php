<?php
declare(strict_types=1);

namespace Test\Integration\Tokenizer;

use LuaT\Tokenizer\Token\Factory;
use LuaT\Tokenizer\Token\Token;

use Test\TestCase;

use function array_unique;
use function array_map;

class TokensTest extends TestCase
{
    /**
     * @var Token[]
     */
    private array $tokens;

    /**
     * @test
     */
    public function each_token_should_have_a_unique_priority(): void
    {
        $total = count($this->tokens);

        $priorities = array_map(
            fn (Token $token) => $token->getPriority(),
            $this->tokens
        );

        $this->assertCount($total, array_unique($priorities));
    }

    /**
     * @test
     */
    public function each_token_should_have_a_unique_index(): void
    {
        $total = count($this->tokens);

        $indexes = array_map(
            fn (Token $token) => $token->getIndex(),
            $this->tokens
        );

        $this->assertCount($total, array_unique($indexes));
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->tokens = (new Factory)();
    }
}
