import BottomNavigation from "../Components/BottomNavigation";
import Header from "../Components/Header";

export default function Layout({ children }) {
    return (
        <>
            <main className="w-full max-w-md mx-auto">
                <Header />
                <article className="p-4">{children}</article>
                <footer className="fixed bottom-0 w-full max-w-md">
                    <BottomNavigation />
                </footer>
            </main>
        </>
    )
}