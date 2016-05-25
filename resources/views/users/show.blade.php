<ul>
  @foreach ($user->accounts as $account)
    <li>Account:: {{ $account->account_no }}</li>
  @endforeach
</ul>
