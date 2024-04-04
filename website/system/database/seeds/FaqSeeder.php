<?php

use App\faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        faq::truncate();
        faq::create([
            'question'  =>  'Your product key is located on the receipt page when you purchase or in the Order History section of the WebStore from which you ordered the software.',
            'answer'    =>  'Before using operating system copies from this site for install, re-install or recovery on devices with pre-installed operating systems, see your device manufacturer or reseller for the customized drivers and applications specific to your machine. Using operating systems copied from this site for install, re-install or recovery may void your support agreement with your manufacturer or reseller. Any drivers or programs that were installed by the device manufacturer or reseller may be removed during installation.'
        ]);
        faq::create([
            'question'  =>  'Is it bootable?',
            'answer'    =>  'The media from this site can be used to create bootable USB drives and DVDs which will allow you to access recovery tools.'
        ]);
        faq::create([
            'question'  =>  "I've downloaded an ISO file, now what?",
            'answer'    =>  '
        You can use the ISO file to create bootable media for installation or recovery. You can also install Windows on your current device by opening the ISO file, selecting the Setup and following the instructions.

    To create bootable media such as a bootable USB drive or DVD, you will need an ISO burning or mounting software. We recommend always using a blank USB or blank DVD because contents may be deleted when creating a bootable image.

If you are creating media from a Windows 8.1 machine, you can also right click the ISO file and select either Mount to mount the image to the current device or a USB drive or select Burn disc image to burn a DVD (this requires a DVD burner and a blank DVD).

If you are creating a DVD from a Windows 7 machine, you can right click the ISO file and select Burn disc image or Open with, then Windows Disc Image Burner to burn a DVD (this requires a DVD burner and a blank DVD). This DVD can be used to install media and is bootable.

If you are creating media from a Windows 7 machine, you may need to use a separate burning or mounting software such as the Windows 7 USB/DVD Download Tool. Before using this tool, be sure to read the Information and Instructions. You can also right click the ISO file and select Burn disc image to burn a DVD (this requires a DVD burner and a blank DVD).

You can also visit Microsoft Community to research other options.

    To use the bootable media, make sure the device you will be installing on is set to boot from a USB or DVD. Then connect the USB or insert the DVD, restart (reboot) the device and then follow the instructions in setup.'
        ]);
    }
}
