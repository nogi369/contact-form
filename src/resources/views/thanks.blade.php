<!DOCTYPE html>
<html lang="ja">
  @extends('layouts.app')

  @section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
  @endsection

<body>
  <main>
    @section('content')
    <div class="thanks__content">
      <div class="thanks__heading">
        <h2>お問い合わせありがとうございます</h2>
      </div>
    </div>
    @endsection
  </main>
</body>

</html>