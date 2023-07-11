<?php

uses(RefreshDatabase::class);

test('create returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = \App\Models\User::factory()->create();
    $authUser = \App\Models\User::factory()->create();

    $response = $this->actingAs($authUser)->get(route('users.sent_messages.create', [$user]));

    $response->assertOk();
    $response->assertViewIs('user.sent-private-message.create');
    $response->assertViewHas('user', $user);
    $response->assertViewHas('username');

    // TODO: perform additional assertions
});

test('create aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = \App\Models\User::factory()->create();
    $authUser = \App\Models\User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($authUser)->get(route('users.sent_messages.create', [$user]));

    $response->assertForbidden();
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = \App\Models\User::factory()->create();
    $authUser = \App\Models\User::factory()->create();

    $response = $this->actingAs($authUser)->get(route('users.sent_messages.index', [$user]));

    $response->assertOk();
    $response->assertViewIs('user.sent-private-message.index');
    $response->assertViewHas('user', $user);
    $response->assertViewHas('pms');
    $response->assertViewHas('subject');

    // TODO: perform additional assertions
});

test('index aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = \App\Models\User::factory()->create();
    $authUser = \App\Models\User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($authUser)->get(route('users.sent_messages.index', [$user]));

    $response->assertForbidden();
});

test('show returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = \App\Models\User::factory()->create();
    $privateMessage = \App\Models\PrivateMessage::factory()->create();
    $authUser = \App\Models\User::factory()->create();

    $response = $this->actingAs($authUser)->get(route('users.sent_messages.show', [$user, 'sentPrivateMessage' => $sentPrivateMessage]));

    $response->assertOk();
    $response->assertViewIs('user.sent-private-message.show');
    $response->assertViewHas('privateMessage', $privateMessage);
    $response->assertViewHas('user', $user);

    // TODO: perform additional assertions
});

test('show aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = \App\Models\User::factory()->create();
    $privateMessage = \App\Models\PrivateMessage::factory()->create();
    $authUser = \App\Models\User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($authUser)->get(route('users.sent_messages.show', [$user, 'sentPrivateMessage' => $sentPrivateMessage]));

    $response->assertForbidden();
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = \App\Models\User::factory()->create();
    $authUser = \App\Models\User::factory()->create();

    $response = $this->actingAs($authUser)->post(route('users.sent_messages.store', [$user]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('store aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = \App\Models\User::factory()->create();
    $authUser = \App\Models\User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($authUser)->post(route('users.sent_messages.store', [$user]), [
        // TODO: send request data
    ]);

    $response->assertForbidden();
});

test('update returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = \App\Models\User::factory()->create();
    $privateMessage = \App\Models\PrivateMessage::factory()->create();
    $authUser = \App\Models\User::factory()->create();

    $response = $this->actingAs($authUser)->patch(route('users.sent_messages.update', [$user, 'sentPrivateMessage' => $sentPrivateMessage]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('update aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = \App\Models\User::factory()->create();
    $privateMessage = \App\Models\PrivateMessage::factory()->create();
    $authUser = \App\Models\User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($authUser)->patch(route('users.sent_messages.update', [$user, 'sentPrivateMessage' => $sentPrivateMessage]), [
        // TODO: send request data
    ]);

    $response->assertForbidden();
});

// test cases...
