<?php

uses(RefreshDatabase::class);

test('create returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = \App\Models\User::factory()->create();
    $bonExchanges = \App\Models\BonExchange::factory()->times(3)->create();
    $authUser = \App\Models\User::factory()->create();

    $response = $this->actingAs($authUser)->get(route('users.transactions.create', [$user]));

    $response->assertOk();
    $response->assertViewIs('user.transaction.create');
    $response->assertViewHas('user', $user);
    $response->assertViewHas('bon');
    $response->assertViewHas('activefl');
    $response->assertViewHas('items');

    // TODO: perform additional assertions
});

test('create aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = \App\Models\User::factory()->create();
    $bonExchanges = \App\Models\BonExchange::factory()->times(3)->create();
    $authUser = \App\Models\User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($authUser)->get(route('users.transactions.create', [$user]));

    $response->assertForbidden();
});

test('store validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        \App\Http\Controllers\User\TransactionController::class,
        'store',
        \App\Http\Requests\StoreTransactionRequest::class
    );
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = \App\Models\User::factory()->create();
    $bonExchange = \App\Models\BonExchange::factory()->create();
    $authUser = \App\Models\User::factory()->create();

    $response = $this->actingAs($authUser)->post(route('users.transactions.store', [$user]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('store aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = \App\Models\User::factory()->create();
    $bonExchange = \App\Models\BonExchange::factory()->create();
    $authUser = \App\Models\User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($authUser)->post(route('users.transactions.store', [$user]), [
        // TODO: send request data
    ]);

    $response->assertForbidden();
});

// test cases...
