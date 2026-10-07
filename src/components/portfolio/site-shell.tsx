import { Link } from '@tanstack/react-router';
import { useState, type ReactNode } from 'react';
import { Menu, X } from 'lucide-react';
import { Button } from '@/components/ui/button';
const nav = [{to:'/',label:'Início'},{to:'/sobre',label:'Sobre Mim'},{to:'/projetos',label:'Projetos'},{to:'/competencias',label:'Competências'},{to:'/contacto',label:'Contacto'}] as const;
export function SiteShell({children}:{children:ReactNode}) {
 const [open,setOpen]=useState(false);
 return <><header className="site-header"><div className="portfolio-container header-inner"><Link to="/" className="brand" onClick={()=>setOpen(false)}>diogo//</Link><nav className="desktop-nav" aria-label="Navegação principal">{nav.map(n=><Link to={n.to} key={n.to} className={`nav-link ${n.to==='/contacto'?'nav-contact':''}`} activeOptions={{exact:true}}>{n.label}</Link>)}</nav><Button variant="ghost" size="icon" className="mobile-menu-button" onClick={()=>setOpen(!open)} aria-label={open?'Fechar menu':'Abrir menu'} aria-expanded={open} aria-controls="mobile-navigation">{open?<X/>:<Menu/>}</Button></div>{open&&<nav id="mobile-navigation" className="mobile-nav" aria-label="Navegação móvel">{nav.map(n=><Link to={n.to} key={n.to} className={`nav-link ${n.to==='/contacto'?'nav-contact':''}`} activeOptions={{exact:true}} onClick={()=>setOpen(false)}>{n.label}</Link>)}</nav>}</header><main>{children}</main><footer className="site-footer"><div className="portfolio-container footer-inner"><p>© 2026 Diogo Mateus</p><p>código limpo. aprendizagem contínua.</p></div></footer></>;
}
