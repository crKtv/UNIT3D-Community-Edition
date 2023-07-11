<?php

uses(RefreshDatabase::class);

test('create returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = \App\Models\User::factory()->create();

    $response = $this->actingAs($user)->get(route('staff.internals.create'));

    $response->assertOk();
    $response->assertViewIs('Staff.internals.create');

    // TODO: perform additional assertions
});

test('destroy returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $internal = \App\Models\Internal::factory()->create();
    $user = \App\Models\User::factory()->create();

    $response = $this->actingAs($user)->delete(route('staff.internals.destroy', [$internal]));

    $response->assertOk();
    $this->assertModelMissing($internal);

    // TODO: perform additional assertions
});

test('edit returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $internal = \App\Models\Internal::factory()->create();
    $user = \App\Models\User::factory()->create();

    $response = $this->actingAs($user)->get(route('staff.internals.edit', [$internal]));

    $response->assertOk();
    $response->assertViewIs('Staff.internals.edit');
    $response->assertViewHas('internal', $internal);

    // TODO: perform additional assertions
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $internals = \App\Models\Internal::factory()->times(3)->create();
    $user = \App\Models\User::factory()->create();

    $response = $this->actingAs($user)->get(route('staff.internals.index'));

    $response->assertOk();
    $response->assertViewIs('Staff.internals.index');
    $response->assertViewHas('internals', $internals);

    // TODO: perform additional assertions
});

test('store validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        \App\Http\Controllers\Staff\InternalController::class,
        'store',
        \App\Http\Requests\Staff\StoreInternalRequest::class
    );
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = \App\Models\User::factory()->create();

    $response = $this->actingAs($user)->post(route('staff.internals.store'), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('update validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        \App\Http\Controllers\Staff\InternalController::class,
        'update',
        \App\Http\Requests\Staff\UpdateInternalRequest::class
    );
});

test('update returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $internal = \App\Models\Internal::factory()->create();
    $user = \App\Models\User::factory()->create();

    $response = $this->actingAs($user)->patch(route('staff.internals.update', [$internal]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

// test cases...
