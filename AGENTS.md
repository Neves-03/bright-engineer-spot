<!-- LOVABLE:BEGIN -->
> [!IMPORTANT]
> This project is connected to [Lovable](https://lovable.dev). Avoid rewriting
> published git history — force pushing, or rebasing/amending/squashing commits
> that are already pushed — as it rewrites history on Lovable's side and the
> user will likely lose their project history.
>
> Commits you push to the connected branch sync back to Lovable and show up in
> the editor, so keep the branch in a working state.
<!-- LOVABLE:END -->

## Portfolio architecture
- Keep portfolio content in reusable presentation sections and static local data; this makes the frontend easy to inspect and migrate.
- Give each named content section its own public route and metadata, while retaining the selected overview composition on the home page.
- Contact forms validate in the browser and explicitly report that nothing was sent; no backend is requested.
- Define visual styling in the global semantic token system and use the shared Button for interactive commands.
