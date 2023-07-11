<?php

beforeEach(function (): void {
    $this->subject = new \App\Http\Requests\Staff\StoreBlacklistClientRequest();
});

test('authorize', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'name' => [
            'required',
            'string',
            'unique:blacklist_clients',
        ],
        'reason' => [
            'sometimes',
            'string',
        ],
    ], $actual);
});

// test cases...
