import { Link } from "@inertiajs/react";

export default function BottomNavigation() {
    return (
        <>
            <Link href="/">Home</Link>
            <Link href="/article">Article</Link>
            <Link href="/order">Order</Link>
            <Link href="/account">Account</Link>
        </>
    )
}