import { useState, type FormEvent } from 'react';
import { Button } from '@/components/ui/button';
import nucleo from '@/assets/nucleo-cli.jpg';
import pulso from '@/assets/pulso.jpg';
import rota from '@/assets/rota-certa.jpg';

export function Hero() {
  return <section className="hero"><div className="portfolio-container hero-inner">
    <p className="eyebrow">portefólio — engenharia informática</p>
    <h1 className="hero-title">diogo<br/><span className="text-muted-foreground">mateus</span></h1>
    <p className="hero-copy">Estudante de Engenharia Informática. Construo sistemas web, automações e pequenas ferramentas com código limpo e intenção clara.</p>
    <p className="terminal-line">&gt; a construir algo novo<span className="caret" aria-hidden="true"/></p>
    <div className="mt-8 flex flex-wrap gap-2.5">{['JavaScript','Python','C#','Node.js'].map(t=><span className="tech-chip" key={t}>{t}</span>)}</div>
  </div></section>;
}
export function AboutSection() {
  return <section className="content-band"><div className="portfolio-container">
    <p className="eyebrow">(01) sobre mim</p><h2 className="section-title">Prefiro resolver problemas reais a decorar frameworks.</h2>
    <p className="section-copy">Gosto de passar do problema ao protótipo: uma API que faz sentido, uma interface honesta, um script que poupa tempo a alguém. Quero continuar a aprender e criar soluções que façam a diferença.</p>
    <div className="about-facts"><div className="fact"><p className="metadata">formação</p><p className="mt-2 text-sm">Eng. Informática</p><p className="mt-1 font-mono text-xs text-primary">Estudante</p></div><div className="fact"><p className="metadata">interesses</p><p className="mt-2 text-sm">Desenvolvimento web</p><p className="mt-1 font-mono text-xs text-primary">Código &amp; criatividade</p></div></div>
  </div></section>;
}
const projects = [
  {name:'Núcleo CLI', image:nucleo, alt:'Terminal de comandos do projeto Núcleo CLI', description:'Interface de linha de comandos que organiza tarefas de compilação e testes em projetos locais.', tech:'Python · CLI · asyncio'},
  {name:'Pulso', image:pulso, alt:'Painel de métricas com gráficos do projeto Pulso', description:'Painel de métricas para monitorizar o estado de uma API, com gráficos e alertas simples.', tech:'Node.js · MySQL · CSS'},
  {name:'Rota Certa', image:rota, alt:'Formulário e mapa de percursos do projeto Rota Certa', description:'Aplicação web para planear deslocações de voluntários, combinando percursos e disponibilidade.', tech:'PHP · MySQL · HTML'},
];
export function ProjectsSection() {
 return <section className="content-band"><div className="portfolio-container"><p className="eyebrow">(02) projetos</p><h2 className="section-title">Do problema à solução.</h2><p className="section-copy">Três projetos fictícios que ilustram o meu percurso.</p><div className="project-list">{projects.map((p,i)=><article className="project-card" key={p.name}><img className="project-image" src={p.image} alt={p.alt} width={816} height={816} loading="lazy"/><div className="project-body"><div className="flex items-center justify-between gap-3"><h3 className="project-name">{p.name}</h3><span className="metadata">0{i+1}</span></div><p className="project-description">{p.description}</p><p className="project-tech">{p.tech}</p></div></article>)}</div></div></section>;
}
export function SkillsSection() {
 return <section className="content-band"><div className="portfolio-container"><p className="eyebrow">(03) competências</p><h2 className="section-title">As ferramentas com que trabalho.</h2><div className="skills-grid">{[{title:'linguagens',items:['JavaScript','Python','C#','PHP']},{title:'web & dados',items:['Node.js','MySQL','HTML','CSS']}].map(g=><div className="skill-group" key={g.title}><h3 className="metadata">{g.title}</h3><ul>{g.items.map(t=><li key={t}>{t}</li>)}</ul></div>)}</div></div></section>;
}
export function ContactSection() {
 const [submitted,setSubmitted]=useState(false);
 function submit(event:FormEvent<HTMLFormElement>) { event.preventDefault(); setSubmitted(true); }
 return <section className="content-band"><div className="portfolio-container"><p className="eyebrow">(04) contacto</p><h2 className="section-title">Vamos falar sobre a próxima coisa a construir.</h2><form className="contact-form" onSubmit={submit} onChange={()=>setSubmitted(false)}><label><span className="metadata">Nome</span><input className="form-field" name="name" autoComplete="name" required maxLength={100} placeholder="O teu nome"/></label><label><span className="metadata">Email</span><input className="form-field" type="email" name="email" autoComplete="email" required maxLength={254} placeholder="O teu email"/></label><label><span className="metadata">Mensagem</span><textarea className="form-field" name="message" required maxLength={4000} rows={4} placeholder="O que tens em mente?"/></label><Button variant="neon" type="submit" className="h-11 w-full text-xs">Enviar mensagem</Button>{submitted&&<p role="status" className="form-status">Formulário validado. Esta é uma demonstração: a mensagem não foi enviada nem guardada.</p>}</form></div></section>;
}
