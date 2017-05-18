;;(setq custom-file "~/.emacs.d/init-custom.el")
;;(load custom-file)
;;
(require 'package)
(add-to-list 'package-archives '("org"
. "http://orgmode.org/elpa/") t)
;; and MELPA
(add-to-list 'package-archives '("melpa"
             . "https://melpa.org/packages/"))
(package-initialize)

(tool-bar-mode -1)
(menu-bar-mode -1)
(scroll-bar-mode -1)
(setq sentence-end-double-space nil)

;; packages autoinstallation snippet
;; (setq packages-list '(docker ereader voca-builder travis pcache
;;     org org-pomodoro org-bullets marshal magit key-chord howdoi
;;     google-translate elpy elfeed color-theme bookmark+))
;; (unless package-archive-contents
;;   (package-refresh-contents))
;; (dolist (package packages-list)
;;   (unless (package-installed-p package)
;;     (package-install package)))

(elpy-enable)
;; (pyvenv-activate "/usr/local/share/DVCS/venv3/")

 (require 'org-bullets)
   (add-hook 'org-mode-hook (lambda () (org-bullets-mode 1)))
;;
(require 'bookmark+)
(require 'ereader)
(require 'docker)

(org-babel-do-load-languages
 'org-babel-load-languages
 '((python . t)
   (emacs-lisp . t)
   (shell . t)
   (sqlite . t)
   (octave . t)
   ))
;;

(setq org-babel-default-header-args:sh
      '((:prologue . "exec 2>&1") (:epilogue . ":"))
      )
;;
(global-set-key (kbd "C-x g") 'magit-status)
(global-set-key (kbd "C-x M-g") 'magit-dispatch-popup)

(setq google-translate-translation-directions-alist '(("en" . "ru")))
(setq google-translate-default-source-language "en")
(setq google-translate-default-target-language "ru")
(global-set-key (kbd "C-c t") 'google-translate-at-point)
(global-set-key (kbd "C-c T") 'google-translate-query-translate)

(define-key global-map "\C-cc" 'org-capture)

 (setq org-capture-templates
'(("p" "Todo" entry (file+headline "~/org/gtd.org" "Tasks")
   "* TODO %?\n  %i\n  %a")
  ("i" "Idiom" entry (file+datetree "/usr/local/share/DVCS/lib/org/idioms.org")
   "* %i\n %U")
  ;;
  ("t" "Thought" entry (file+datetree "/usr/local/share/DVCS/lib/org/thoughts.org")
   "* %?%c\n%i\n %f")
  ;;
  ("r" "Proverb riddle" entry (file+datetree "/usr/local/share/DVCS/lib/org/proverbs.org")
   "* %c\n %? %i \n %f")
  ;;
  ("o" "Proverb obvious" entry (file+datetree "/usr/local/share/DVCS/lib/org/proverbs.org")
   "* %i \n %f")
  ;; 
  ("j" "Journal" entry (file+datetree "~/org/journal.org")
   "* %?\nEntered on %U\n  %i\n  %a")))

(setq org-publish-project-alist
'(("jekyll-org"
   :base-directory "/usr/local/share/DVCS/org-pub/"
   :base-extension "org"
   ;; Path to your Jekyll project.
   :publishing-directory "/usr/local/share/DVCS/0--key.github.io/_posts/"
   :recursive t
   :publishing-function org-html-publish-to-html
   :headline-levels 4
   :html-extension "html"
   :section-numbers nil
   :with-toc nil
   :body-only t
   ;; Only export section between <body> </body> (body-only)
   )
  ("jekyll-org-img"
   :base-directory "/usr/local/share/DVCS/org-pub/img/"
   :base-extension "css\\|js\\|png\\|jpg\\|gif\\|pdf\\|mp3\\|ogg\\|swf\\|php"
   :publishing-directory "/usr/local/share/DVCS/0--key.io/assets/img/"
   :recursive t
   :publishing-function org-publish-attachment)

  ("jekyll" :components ("jekyll-org" "jekyll-org-img"))
  ))
;;
(require 'voca-builder)
  (setq voca-builder/voca-file "/usr/local/share/DVCS/lib/org/eng.org")
  (setq voca-builder/export-file "~/.voca-builder-temp.org")
  (setq voca-builder/current-tag "Quora")

(require 'key-chord)
    (key-chord-mode 1)
    (key-chord-define-global "ww"     'google-translate-at-point)
    (key-chord-define-global "QQ"     'voca-builder/search-popup)
    (key-chord-define-global "wq"     'org-set-tags-command)
    (key-chord-define-global "]\\"     'other-frame)
;; for n900 interaction
    (key-chord-define-global "VV"     'voca-builder/search-popup)
    (key-chord-define-global "OO"     'delete-other-windows)
    (key-chord-define-global "MM"     'set-mark-command)
    (key-chord-define-global "KK"     'kill-ring-save)
    (key-chord-define-global ",,"     'org-capture)
;; for full-fledged keyboard
    (key-chord-define-global "'\\"     'other-frame)
;;
(key-chord-define org-mode-map "NN"     'org-forward-heading-same-level)
(key-chord-define org-mode-map "UU"     'org-backward-heading-same-level)
;;
(key-chord-define org-mode-map "''"     'org-edit-special)
(key-chord-define org-src-mode-map "''"     'org-edit-src-exit)
;;


(custom-set-variables
 ;; custom-set-variables was added by Custom.
 ;; If you edit it by hand, you could mess it up, so be careful.
 ;; Your init file should contain only one such instance.
 ;; If there is more than one, they won't work right.
 '(package-selected-packages
   (quote
    (org bookmark+ color-theme elfeed elpy google-translate
    howdoi key-chord magit marshal org-bullets org-pomodoro
    pcache travis voca-builder ereader docker))))
(custom-set-faces
 ;; custom-set-faces was added by Custom.
 ;; If you edit it by hand, you could mess it up, so be careful.
 ;; Your init file should contain only one such instance.
 ;; If there is more than one, they won't work right.
 )
