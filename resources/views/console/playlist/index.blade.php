@extends('layouts.console')

@section('title', 'Songs')

@section('content')
	<div class="grid-x grid-padding-x margin-top">
        <div class="small-12 cell">
            <table>
                <thead>
                    <tr>
                        <th width="40%"><?= __('messages.song') ?></th>
                        <th width="40%"><?= __('messages.artist') ?></th>
                        <th width="20%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($songs as $i => $song): $isFirstSong = ($i==0);  ?>
                        <tr>
                            <td><?php if ($isFirstSong): ?><span class="fa fa-play"></span><?php endif ?> <?= $song->name ?></td>
                            <td><?= $song->artist->name ?></td>
                            <td class="text-center">
                                <?php if ($isFirstSong): ?>
                                    <a href="<?= route('console_playlist_delete', ['id' => $song->id]) ?>" class="button alert large"><span class="fa fa-step-forward "></span> <?= __('messages.skip') ?></a>
                                <?php else: ?>
                                    <a href="<?= route('console_playlist_delete', ['id' => $song->id]) ?>" class="button large"><span class="fa fa-close"></span> <?= __('messages.remove') ?></a>
                                <?php endif ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
@endsection
