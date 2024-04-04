<div>

    <form wire:submit.prevent="send">
        <label for="">
            sender Type
        </label>
        <input type="radio" name="shifter" id="individual" wire:click.prevent="shift(0)" @if($shifter == 0) checked="checked" @endif>
        <label for="individual">Individual</label>
        <input type="radio" name="shifter" id="group" wire:click.prevent="shift(1)" @if($shifter == 1) checked="checked" @endif>
        <label for="group">Group</label>
        <input type="radio" name="shifter" id="contact" wire:click.prevent="shift(2)" @if($shifter == 2) checked="checked" @endif>
        <label for="contact">Contact</label>
        <br>
        <label for="to">To *</label><br>
        @if($shifter == 0)
        <input type="text" name="to" id="to" wire:model="to" placeholder="980XXXXXXX, 984XXXXXXX">
@elseif($shifter == 1)
        @foreach($groups as $group)
            <input type="checkbox" value="{{$group->id}}" name="receipt_groups[]" id="group{{$loop->iteration}}" wire:model="group_receipts">
            <label for="group{{$loop->iteration}}">{{$group->name}}</label>
        @endforeach
@else
        @foreach($contacts as $contact)
            <input type="checkbox" value="{{$contact->phone}}" name="receipt_contacts[]" id="contact{{$loop->iteration}}" wire:model="contact_receipts">
            <label for="contact{{$loop->iteration}}">{{$contact->full_name ?? "Unknown Number"}}</label>
            @endforeach
        @endif
        <br>
        <br>
        <label for="message">Message</label><br>
        <textarea name="message" id="message" cols="80" rows="10" wire:model="message"></textarea>
        <br>
        <a href="{{route('notice.index')}}"><button>Skip</button></a>
        <button type="submit">Send</button>
    </form>
</div>
