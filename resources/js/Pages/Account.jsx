import { Link } from "@inertiajs/react";
import { useState } from "react";
import { FaArrowLeft, FaPeopleCarryBox, FaLanguage } from "react-icons/fa6";
import { IoIosArrowForward } from "react-icons/io";
import { MdAccountCircle, MdAddLocationAlt, MdPrivacyTip } from "react-icons/md";
import { LuTicketPercent } from "react-icons/lu";
import { RiLockPasswordFill } from "react-icons/ri";
import { BsTelephoneFill } from "react-icons/bs";
import { IoLogOutSharp } from "react-icons/io5";
import { TfiWrite } from "react-icons/tfi";

export default function Account() {
    const [activeLanguage, setActiveLanguage] = useState('English');

    return (
        <>
            <div className="max-w-md mx-auto p-4">
                <div className="fixed left-1/2 top-12 z-50 flex items-center p-2 w-full max-w-screen-sm -translate-x-1/2 bg-white shadow-sm border-b border-gray-300">
                    <Link><FaArrowLeft/></Link>
                    <h1 className="ml-4 text-xl font-bold">Account</h1>
                </div>
            </div>

            <div className="p-4">
                <div className="flex items-center mt-5 mb-4">
                    <MdAccountCircle className="w-12 h-12 text-gray-500" />
                    <div className="ml-4">
                        <p className="font-medium text-bold">Aurelia</p>
                        <p className="text-gray-500">082393151071</p>
                    </div>
                </div>
                <div className="mb-4">
                    <button className="w-full flex items-center justify-between p-3 border rounded-lg">
                        <span className="flex items-center">
                            <LuTicketPercent className="w-5 h-5 text-green-500 mr-3" />
                            Promo
                        </span>
                        <IoIosArrowForward />
                    </button>
                </div>

                <div className="border-b border-2 border-gray-300 mb-4"></div>
                <div className="space-y-4">
                    <div className="flex items-center">
                        <MdAddLocationAlt className="w-5 h-5 text-red-400" />
                        <Link className="ml-4">Add Address</Link>
                    </div>
                    <div className="flex items-center">
                        <RiLockPasswordFill className="w-5 h-5 text-yellow-300" />
                        <Link className="ml-4">Set PIN & Password</Link>
                    </div>
                    <div className="flex items-center">
                        <FaPeopleCarryBox className="w-5 h-5 text-red-300" />
                        <Link className="ml-4">How To Pickup</Link>
                    </div>
                </div>

                <div className="border-b border-2 border-gray-300 mb-4"></div>
                <ul className="space-y-4">
                    <li className="flex items-center">
                        <TfiWrite className="w-5 h-5 text-red-400" />
                        <Link className="ml-4 text-gray-700">Terms And Condition</Link>
                    </li>
                    <li className="flex items-center">
                        <MdPrivacyTip className="w-5 h-5 text-yellow-300" />
                        <Link className="ml-4 text-gray-700">Privacy Policy</Link>
                    </li>
                    <li className="flex items-center">
                        <BsTelephoneFill className="w-5 h-5 text-red-300" />
                        <Link className="ml-4 text-gray-700">Contact Us</Link>
                    </li>
                    <li className="flex items-center">
                        <IoLogOutSharp className="w-5 h-5 text-yellow-400" />
                        <Link className="ml-4 text-gray-700">Logout</Link>
                    </li>
                    <li className="flex items-center">
                        <FaLanguage className="w-5 h-5 text-red-400" />
                        <Link className="ml-4 text-gray-700">Language</Link>
                    </li>
                </ul>

                <div className="mt-6 flex justify-center">
                    <div className="flex items-center border rounded-full overflow-hidden">
                        <button
                            className={`px-4 py-2 ${activeLanguage === 'Bahasa Indonesia' ? 'text-green-500 bg-white' : 'text-gray-500 bg-gray-100'}`}
                            onClick={() => setActiveLanguage('Bahasa Indonesia')}
                        >
                            Bahasa Indonesia
                        </button>
                        <button
                            className={`py-2 px-4 ${activeLanguage === 'English' ? 'text-green-500 bg-white' : 'text-gray-500 bg-gray-100'}`}
                            onClick={() => setActiveLanguage('English')}
                        >
                            English
                        </button>
                    </div>
                </div>
            </div>
        </>
    )
}